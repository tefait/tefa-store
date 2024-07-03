<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    // Guarded attributes
    protected $guarded = [];

    // Automatically eager load the 'images' relationship

    // Append the 'orders_count' attribute and the custom 'image' attribute
    protected $appends = ['orders_count', 'image'];

    // Accessor for 'orders_count'
    public function getOrdersCountAttribute()
    {
        return $this->orders->count();
    }

    // Mutator for 'slug'
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    // Accessor for 'status_label'
    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge badge-secondary">Draft</span>';
        }

        return '<span class="badge badge-success">Aktif</span>';
    }

    // Accessor for the first image's URL
    

    public function getPriceAttribute()
    {
        // Return the URL of
        if (auth('customer')->check() && !empty($this->member_disc)) {
            return $this->attributes['price'] * (1 - $this->member_disc / 100);
        }
        return $this->attributes['price'];
    }

    // Relationship to ProductImage (has many)
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function getImageAttribute()
    {
        // Return the URL of the first image if it exists
        return $this->images->first()->url;
    }

    // Relationship to OrderDetail (has many)
    public function orders()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // Relationship to Category (belongs to)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship to Comment (has many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
