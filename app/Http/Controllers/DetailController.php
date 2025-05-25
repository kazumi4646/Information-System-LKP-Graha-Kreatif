<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DetailController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Get programs the user is enrolled in
        $enrolledPrograms = $user->programs;

        Log::info('Enrolled programs count: ' . $enrolledPrograms->count());
        
        // Get all available categories first
        $allCategories = Program::select('category')->distinct()->pluck('category');
        Log::info('All available categories: ' . $allCategories);

        $interestedCategories = $enrolledPrograms->count() > 0 ? 
            $enrolledPrograms->pluck('category')->unique() : 
            $allCategories;

         Log::info('Interested categories: ' . $interestedCategories);    

        // Get suggested programs
        if ($enrolledPrograms->count() > 0) {
            // Get programs in the same categories, but not already enrolled
            $suggestedPrograms = Program::whereIn('category', $interestedCategories)
                ->whereNotIn('id', $enrolledPrograms->pluck('id'))
                ->get();
                
            // If nothing found, get some random programs as suggestions
            if ($suggestedPrograms->isEmpty()) {
                $suggestedPrograms = Program::whereNotIn('id', $enrolledPrograms->pluck('id'))
                    ->inRandomOrder()
                    ->limit(3)
                    ->get();
            }
        } else {
            // If user hasn't enrolled in any programs, show all available programs
            $suggestedPrograms = Program::inRandomOrder()->limit(6)->get();
        }
        
        Log::info('Suggested programs count: ' . $suggestedPrograms->count());
        
        return view('programsdetail', compact('enrolledPrograms', 'suggestedPrograms'));
    }

}
