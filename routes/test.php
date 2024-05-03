<?php

use App\Models\User;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Route;

Route::get('users/', fn () => view('test.list_user', ['users' => User::with('userinfo')->get()]));
