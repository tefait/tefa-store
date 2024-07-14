<?php

namespace App\Models;

use App\Observers\CustomerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

#[ObservedBy([CustomerObserver::class])]
class Customer extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['rel_address'];

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
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
