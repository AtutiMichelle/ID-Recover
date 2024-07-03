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
            'admission_on_id' => 'required|string',
            'name_on_id' => 'required|string',
            'course_on_id' => 'required|string',
            'location_found' => 'nullable|string',
            'date_found' => 'required|date',
            'finder_email' => 'nullable|string|email',
            'finder_phone_number' => 'nullable|string',
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
            'admission_on_id' => $request->admission_on_id,
            'name_on_id' => $request->name_on_id,
            'course_on_id' => $request->course_on_id,
            'location_found' => $request->location_found,
            'date_found' => $request->date_found,
            'finder_email' => $request->finder_email,
            'finder_phone_number' => $request->finder_phone_number,
            'image_url' => $imagePath,
        ]);

        // Save the new FoundId instance to the database
        $foundId->save();

        // Redirect back with success message or any other response
        return redirect()->route('submit_found_id_form')->with('status', 'ID submitted successfully!');
    }

    public function retrievePostedId(Request $request)
    {
        $search = $request->input('search');

        // Retrieve found IDs based on the search query
        $foundId = FoundId::query()
            ->when($search, function ($query, $search) {
                return $query->where('admission_on_id', 'like', "%{$search}%")
                             ->orWhere('name_on_id', 'like', "%{$search}%")
                             ->orWhere('course_on_id', 'like', "%{$search}%")
                             ->orWhere('location_found', 'like', "%{$search}%")
                             ->orWhere('finder_email', 'like', "%{$search}%")
                             ->orWhere('finder_phone_number', 'like', "%{$search}%");
            })
            ->get();

        return view('user.retrieve_posted_id', compact('foundId', 'search'));
    }

    public function adminretrievePostedId(Request $request)
    {
        $search = $request->input('search');

        // Retrieve found IDs based on the search query
        $foundId = FoundId::query()
            ->when($search, function ($query, $search) {
                return $query->where('admission_on_id', 'like', "%{$search}%")
                             ->orWhere('name_on_id', 'like', "%{$search}%")
                             ->orWhere('course_on_id', 'like', "%{$search}%")
                             ->orWhere('location_found', 'like', "%{$search}%")
                             ->orWhere('finder_email', 'like', "%{$search}%")
                             ->orWhere('finder_phone_number', 'like', "%{$search}%");
            })
            ->get();

        return view('admin.admin_retrieve_posted_id', compact('foundId', 'search'));
    }

    public function edit($id)
    {
        $foundId = FoundId::findOrFail($id);
        return view('user.edit_found_id', compact('foundId'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'admission_on_id' => 'required|string',
            'name_on_id' => 'required|string',
            'course_on_id' => 'required|string',
            'location_found' => 'nullable|string',
            'date_found' => 'required|date',
            'finder_email' => 'nullable|string|email',
            'finder_phone_number' => 'nullable|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $foundId = FoundId::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('images', 'public');
            $foundId->image_url = $imagePath;
        }

        // Update the FoundId instance with the new data
        $foundId->admission_on_id = $request->admission_on_id;
        $foundId->name_on_id = $request->name_on_id;
        $foundId->course_on_id = $request->course_on_id;
        $foundId->location_found = $request->location_found;
        $foundId->date_found = $request->date_found;
        $foundId->finder_email = $request->finder_email;
        $foundId->finder_phone_number = $request->finder_phone_number;

        $foundId->save();

        return redirect()->route('retrieve_posted_id')->with('status', 'ID updated successfully!');
    }
}
