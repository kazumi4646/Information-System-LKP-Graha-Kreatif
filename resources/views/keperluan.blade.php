
// This is a Laravel controller for managing user enrollment in programs
public function enroll(Request $request, $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $user = Auth::user();

        // Check if the user is already enrolled
        if ($user->programs()->where('program_id', $program->id)->exists()) {
            return redirect()->back()->with('error', 'You are already enrolled in this program.');
        }

        // Enroll the user in the program
        $user->programs()->attach($program->id);

        return redirect()->route('programs.index')->with('success', 'You have successfully enrolled in the program.');
    }


// This is a Laravel controller for managing user enrollment in programs
    public function unenroll(Request $request, $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $user = Auth::user();

        // Check if the user is enrolled
        if (!$user->programs()->where('program_id', $program->id)->exists()) {
            return redirect()->back()->with('error', 'You are not enrolled in this program.');
        }

        // Unenroll the user from the program
        $user->programs()->detach($program->id);

        return redirect()->route('programs.index')->with('success', 'You have successfully unenrolled from the program.');
    }
    
    //button to enroll in the program.blade.php
    <form action="{{ route('programs.enroll', $program->slug) }}" method="POST">
        @csrf
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
            Bergabung Dengan Program
        </button>
    </form>