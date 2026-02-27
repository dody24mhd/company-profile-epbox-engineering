<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'categories',
        'status',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];

    /**
     * Get the category for this project
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories', 'slug');
    }

    /**
     * Scope to get only published projects
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope to get featured projects
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
