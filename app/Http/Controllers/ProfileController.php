<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('form_profile');
    }

    public function add(Request $request) 
    {
        $profile = new Profile();
        
        $profile->name = $request->input('name');
        $profile->surname = $request->input('surname');
        $profile->email = $request->input('email');
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('uploads/profile_photos/', $filename);
            $profile->photo = $filename;
        } else {
            return $request;
            $profile->photo = '';
        }

        $profile->save();

        return view('form_profile')->with('form_profile', $profile);
    }
}
