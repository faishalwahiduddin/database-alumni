<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class AlumniController extends Controller
{
    protected $cloudinary;

    public function __construct(Cloudinary $cloudinary)
    {
        $this->cloudinary = $cloudinary;
    }
    public function showForm()
    {
        return view('welcome')->with('alumni', null);
    }

    public function detail($phone)
    {
        // dd($phone);
        $alumni = Alumni::where('phone', $phone)->first();


        return view('welcome')->with('alumni', $alumni);
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_picture_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profile_picture_camera' => 'nullable|string',
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

            $uploadedFile = $this->cloudinary->uploadApi()->upload($file->getRealPath(), [
                'public_id' => 'profile_pictures/' . $filename,
                'folder' => 'profile_pictures'
            ]);

            $profilePicturePath = $uploadedFile['secure_url'];
        } elseif ($request->filled('profile_picture_camera')) {
            $imageData = $request->input('profile_picture_camera');
            $filename = $request->phone . '.png'; // Assuming the camera capture is in PNG format

            $uploadedFile = $this->cloudinary->uploadApi()->upload($imageData, [
                'public_id' => 'profile_pictures/' . $filename,
                'folder' => 'profile_pictures',
                'resource_type' => 'image'
            ]);

            $profilePicturePath = $uploadedFile['secure_url'];
        }

        $alumni = Alumni::create([
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

        // dd($alumni->toArray());

        return redirect()->route('alumni.detail', $request->phone);

        // return redirect()->back()->with('success', 'Data alumni has been saved successfully.');
    }

    public function showIdCard($phone)
    {
        $alumni = Alumni::where('phone', $phone)->first();
        return view('id-card', compact('alumni'));
    }
}
