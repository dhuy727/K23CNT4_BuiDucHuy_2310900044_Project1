<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'userid'    => 'required|alpha_num|min:5|max:12',
            'password'  => 'required|min:7|max:12',
            'name'      => 'required|alpha',
            'country'   => 'required',
            'zipcode'   => 'required|numeric',
            'email'     => 'required|email',
            'sex'       => 'required',
            'language'  => 'required|array|min:1',
        ]);


        return back()->with('success', 'Registration successful!');
    }
}

