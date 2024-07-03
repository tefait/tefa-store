<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'url',
    ];

    /**
     * Get the product that owns the ProductImage
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
