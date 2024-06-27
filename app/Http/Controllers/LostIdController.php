<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostId;
use App\Models\FoundId;
use Illuminate\Support\Facades\Auth;

class LostIdController extends Controller
{
    public function createForm()
    {
        return view('admin.report_lost_id');
    }

    public function submitForm(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'admission' => 'required|string',
            'name' => 'required|string',
            'course' => 'required|string',
            'date_lost' => 'required|date',
            'email' => 'required|email',
            'phone_number' => 'required|string',
           
        ]);

        // Check if the ID has already been found
        $foundId = FoundId::where('admission_on_id', $validatedData['admission'])->first();

        if ($foundId) {
            return redirect()->back()->with('status', 'This ID has already been found.');
        }

        // Create a new LostId instance
        $lostId = new LostId([
            'admission' => $request->admission,
            'name' => $request->name,
            'course' => $request->course,
            'date_lost' => $request->date_lost,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        $lostId->save();

        // Redirect to a success page or any other action
        return redirect()->route('report_lost_id.form')->with('status', 'ID reported as lost successfully!');
        
    }

    public function retrieveForm()
    {
        return view('user.retrieve_lost_id');
    }

    public function retrieveData(Request $request)
    {
        $search = $request->input('search');

        $lostIds = LostId::where('admission', 'LIKE', "%{$search}%")
                        ->orWhere('name', 'LIKE', "%{$search}%")
                        ->orWhere('date_lost', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere('phone_number', 'LIKE', "%{$search}%")
                        ->get();

        return view('user.retrieve_lost_id', ['lostIds' => $lostIds]);
    }
}
