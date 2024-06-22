<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function showForm()
    {
        return view('update-alumni');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:alumni,email',
            'phone' => 'required|string|max:15',
            'npm' => 'required|string|max:20',
            'program_study' => 'required|string|max:255',
            'entry_year' => 'required|integer',
            'company' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        $profilePicturePath = null;

        if ($request->hasFile('profile_picture_upload')) {
            $file = $request->file('profile_picture_upload');
            $filename = $request->phone . '.' . $file->getClientOriginalExtension();
            $profilePicturePath = $file->storeAs('profile_pictures', $filename, 'public');
        }

        Alumni::create([
            'profile_picture' => $profilePicturePath,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'npm' => $request->npm,
            'program_study' => $request->program_study,
            'entry_year' => $request->entry_year,
            'company' => $request->company,
            'position' => $request->position,
        ]);

        return redirect()->back()->with('success', 'Data alumni has been saved successfully.');
    }
}
