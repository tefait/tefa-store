<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function UpdateUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'photo_file' => 'nullable|image|mimes:png,jpg,svg,webp,gif,jpeg|max:2048',
            'phone_number' => 'required',
            'gender' => 'required|boolean'
        ]);
        if ($request->file('photo_file')) {
            $file = $request->file('photo_file');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $data['image'] = $file->storeAs('public/customers', $filename);
            Storage::delete(Auth::guard('customer')->user()->image);
            unset($data['photo_file']);
        }
        Auth::guard('customer')->user()->update($data);
        return redirect()->back();
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
