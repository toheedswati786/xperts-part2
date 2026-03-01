<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    
    protected $fillable = [
        'product_name',
        'category_slug',
        'price',
        'discount_price',
        'description',
        'details',
        'image1',
        'image2',
        'image3',
        'image4',
        'stock',
        'status',
        'is_active',
        'is_hot',
        'is_best_selling',
        'is_featured',
        'impression',
        'brand',
        'gender',
        'age_group',
        'size',
        'color',
        'material',
        'type',
        'product_url',
        'product_info',
        'base_price',
        'order_count',
        'margin_applied'
    ];
    
    protected $casts = [
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'base_price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_hot' => 'boolean',
        'is_best_selling' => 'boolean',
        'is_featured' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    // Accessor for product name
    public function getNameAttribute()
    {
        return $this->product_name;
    }
    
    // Accessor for formatted price
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }
    
    // Scope for active products
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    
    // Scope for featured products
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    
    // Scope for best selling products
    public function scopeBestSelling($query)
    {
        return $query->where('is_best_selling', 1);
    }
    
    // Get main image
    public function getMainImageAttribute()
    {
        return $this->image1 ?: 'https://placehold.co/400x400/cccccc/969696?text=Product';
    }
}