<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoundId;

use Illuminate\Support\Facades\Auth;

class FoundIdController extends Controller
{
    public function showSubmitFoundIdForm()
    {
        return view('user.submit_found_id');
    }

    public function submitFoundId(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name_on_id' => 'required|string',
            'course_on_id' => 'required|string',
            'location_found' => 'required|string',
            'date_found' => 'required|date',
            'finder_email' => 'required|string|email',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('images', 'public');
        } else {
            $imagePath = null;
        }
    
        $user = Auth::user();
    
        $foundId = new FoundId([
            'user_id' => $user->id,
            'name_on_id' => $request->name_on_id,
            'course_on_id' => $request->course_on_id,
            'location_found' => $request->location_found,
            'date_found' => $request->date_found,
            'finder_email' => $request->finder_email,
            'image_url' => $imagePath,
        ]);

        
        // Save the new FoundId instance to the database
        $foundId->save();
    
        // Redirect back with success message or any other response
        return redirect()->route('submit_found_id_form')->with('status', 'ID submitted successfully!');
    }
}