<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdReplacementController extends Controller
{
    public function showIdReplacementForm()
    {
        return view('user.id_replacement');
    }

    public function submitIdReplacement(Request $request)
    {
        // Validate incoming requests
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'admission_number' => 'required|string',
            'course' => 'required|string',
            'mode_of_study' => 'required|string|in:Full-time,Part-time',
            'id_type' => 'required|string|in:Expired/Broken/Faded,Lost (First Time)',
            'transaction_message' => 'required|string',
            'police_abstract' => 'nullable|file',
            'lost_id_form' => 'nullable|file',
        ]);

        // Process further logic such as saving to database, sending emails, etc.

        // Redirect or return response
        return redirect()->back()->with('success', 'ID Replacement request submitted successfully.');
    }
}
