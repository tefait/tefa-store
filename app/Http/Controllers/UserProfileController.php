<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function UpdateUser(Request $request) {
        $data = $request->validate([
            'name' => 'required|',
            'phone_number' => 'required',
            'gender' => 'required|boolean'
        ]);
    }
}
