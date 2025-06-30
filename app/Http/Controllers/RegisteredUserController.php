<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Debug: Log all request data
        Log::info('Registration Request Data:', $request->all());
        Log::info('Has pas_foto file:', [$request->hasFile('pas_foto')]);
        Log::info('Has kartu_keluarga file:', [$request->hasFile('kartu_keluarga')]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'alamat' => ['required', 'string', 'max:500'],
            'pas_foto' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'kartu_keluarga' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Handle file uploads
        $pasFotoPath = null;
        $kkPath = null;

        if ($request->hasFile('pas_foto')) {
            $pasFotoPath = $request->file('pas_foto')->store('documents/pas_foto', 'public');
            Log::info('Pas foto uploaded to:', [$pasFotoPath]);
        }

        if ($request->hasFile('kartu_keluarga')) {
            $kkPath = $request->file('kartu_keluarga')->store('documents/kartu_keluarga', 'public');
            Log::info('Kartu keluarga uploaded to:', [$kkPath]);
        }

        // Debug: Log data being saved
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pas_foto' => $pasFotoPath,
            'kartu_keluarga' => $kkPath,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'is_approved' => false, // Require admin approval
        ];
        
        Log::info('User data to be created:', $userData);

        $user = User::create($userData);

        // Debug: Log created user
        Log::info('Created user:', $user->toArray());

        event(new Registered($user));

        // Don't auto-login, redirect to login with message
        return redirect()->route('login')->with('status', 'Registrasi berhasil! Silakan tunggu persetujuan admin sebelum dapat login.');
    }
}