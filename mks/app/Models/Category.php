<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'image',
        'is_active',
        'sort_order'
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
        'parent_id' => 'integer',
        'sort_order' => 'integer'
    ];
    
    // Relationship to parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    
    // Relationship to child categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    // Scope for active categories
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    
    // Scope for parent categories (no parent_id)
    public function scopeParents($query)
    {
        return $query->whereNull('parent_id');
    }
}