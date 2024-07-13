<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function UpdateUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|',
            'phone_number' => 'required',
            'gender' => 'required|boolean'
        ]);
    }
    public function CreateUserAddress(Request $request)
    {
        $data =  $request->validate([
            'recipient' => 'required|string',
            'phone_number' => 'required|string|nullable',
            'address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'regency_id' => 'required|exists:regencies,id',
            'district_id' => 'required|exists:districts,id',
            'village_id' => 'required|exists:villages,id',
        ]);
        dd($data);
    }
}
