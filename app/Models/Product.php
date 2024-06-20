<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['orders_count'];

    public function getOrdersCountAttribute()
    {
        return $this->orders()->count();
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getStatusLabelAttribute()
    {
        //Adapun Valuenya Akan Mencetak Html Berdasarkan Value Dari Field Status
        if ($this->status == 0) {
            return '<span class="badge badge-secondary">Draft</span>';
        }

        return '<span class="badge badge-success">Aktif</span>';
    }

    public function orders()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
}
