<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    // Mutator
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function getVillageAttribute()
    {
        return $this->rel_address->first()->village;
    }
    public function getAddressAttribute()
    {
        return $this->rel_address->first()->address;
    }

    public function rel_address()
    {
        return $this->hasMany(CustomerAddress::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
