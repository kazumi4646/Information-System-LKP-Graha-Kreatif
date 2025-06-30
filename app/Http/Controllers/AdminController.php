<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'pending_users' => User::where('role', 'user')->where('is_approved', false)->count(),
            'approved_users' => User::where('role', 'user')->where('is_approved', true)->count(),
            'total_programs' => Program::count(),
            'total_enrollments' => \DB::table('user_programs')->count(),
        ];

        $pending_users = User::where('role', 'user')->where('is_approved', false)->latest()->take(5)->get();
        $recent_approved = User::where('role', 'user')->where('is_approved', true)->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'pending_users', 'recent_approved'));
    }

    // Pending Users (Need Verification)
    public function pendingUsers()
    {
        $users = User::where('role', 'user')->where('is_approved', false)->paginate(10);
        return view('admin.users.pending', compact('users'));
    }

    // Approved Users Management
    public function users()
    {
        $users = User::where('role', 'user')->where('is_approved', true)->with('programs')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    // Approve User
    public function approveUser(User $user)
    {
        $user->update([
            'is_approved' => true,
            'approved_at' => now(),
            'approved_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'User berhasil disetujui!');
    }

    // Reject User
    public function rejectUser(User $user)
    {
        // Delete uploaded files
        if ($user->pas_foto) {
            Storage::disk('public')->delete($user->pas_foto);
        }
        if ($user->kartu_keluarga) {
            Storage::disk('public')->delete($user->kartu_keluarga);
        }

        $user->delete();
        return redirect()->back()->with('success', 'User berhasil ditolak dan dihapus!');
    }

    // View User Details
    public function showUser(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'tanggal_lahir' => 'required|date|before:today',
            'alamat' => 'required|string|max:500',
            'pas_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kartu_keluarga' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        // Handle file uploads
        $pasFotoPath = null;
        $kkPath = null;

        if ($request->hasFile('pas_foto')) {
            $pasFotoPath = $request->file('pas_foto')->store('documents/pas_foto', 'public');
        }

        if ($request->hasFile('kartu_keluarga')) {
            $kkPath = $request->file('kartu_keluarga')->store('documents/kartu_keluarga', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pas_foto' => $pasFotoPath,
            'kartu_keluarga' => $kkPath,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'is_approved' => true, // Admin created users are auto-approved
            'approved_at' => now(),
            'approved_by' => auth()->id(),
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully!');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'tanggal_lahir' => 'required|date|before:today',
            'alamat' => 'required|string|max:500',
            'pas_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kartu_keluarga' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'role' => 'required|in:user,admin',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ];

        // Handle file uploads
        if ($request->hasFile('pas_foto')) {
            if ($user->pas_foto) {
                Storage::disk('public')->delete($user->pas_foto);
            }
            $data['pas_foto'] = $request->file('pas_foto')->store('documents/pas_foto', 'public');
        }

        if ($request->hasFile('kartu_keluarga')) {
            if ($user->kartu_keluarga) {
                Storage::disk('public')->delete($user->kartu_keluarga);
            }
            $data['kartu_keluarga'] = $request->file('kartu_keluarga')->store('documents/kartu_keluarga', 'public');
        }

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'string|min:8|confirmed',
            ]);
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function destroyUser(User $user)
    {
        if ($user->isAdmin() && User::where('role', 'admin')->count() <= 1) {
            return redirect()->route('admin.users')->with('error', 'Cannot delete the last admin user!');
        }

        // Delete uploaded files
        if ($user->pas_foto) {
            Storage::disk('public')->delete($user->pas_foto);
        }
        if ($user->kartu_keluarga) {
            Storage::disk('public')->delete($user->kartu_keluarga);
        }

        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }
}