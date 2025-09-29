<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img',
        'categories',
        'status',
        'client',
        'year',
        'technologies',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'technologies' => 'array'
    ];

    /**
     * Get the category for this product
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories', 'slug');
    }

    /**
     * Scope to get only published products
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope to get featured products
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope to filter by category
     */
    public function scopeByCategory($query, $category)
    {
        if ($category && $category !== 'all') {
            return $query->where('categories', $category);
        }
        return $query;
    }
}
