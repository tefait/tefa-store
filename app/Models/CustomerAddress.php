<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'address', 'village_id', 'recipient', 'phone_number'];
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
    public function district()
    {
        return $this->village->district();
    }
    public function regency()
    {
        return $this->village->district->regency();
    }
    public function province()
    {
        return $this->village->district->regency->province();
    }
}
