<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description', // Keep for backward compatibility
        'excerpt',
        'content',
        'image_url',
        'img', // Keep for backward compatibility
        'category_id',
        'author',
        'status',
        'is_featured',
        'meta_title',
        'meta_description',
        'published_at',
        'date_publish', // Keep for backward compatibility
        'tags',
        'categories'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'date_publish' => 'date',
    ];

    /**
     * Get the category that owns the blog
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope to get only published blogs
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope to get only featured blogs
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Get the image URL attribute (backward compatible)
     */
    public function getImageUrlAttribute($value)
    {
        // If image_url is set, use it
        if ($value) {
            if (!str_starts_with($value, 'http')) {
                return asset('storage/' . $value);
            }
            return $value;
        }
        
        // Fallback to old 'img' field
        if ($this->img) {
            if (!str_starts_with($this->img, 'http')) {
                return asset('storage/' . $this->img);
            }
            return $this->img;
        }
        
        return null;
    }

    /**
     * Get the content attribute (backward compatible)
     */
    public function getContentAttribute($value)
    {
        // If content is set, use it
        if ($value) {
            return $value;
        }
        
        // Fallback to old 'description' field
        return $this->description;
    }

    /**
     * Get the excerpt attribute
     */
    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // Generate excerpt from content or description
        $content = $this->content ?: $this->description;
        return Str::limit(strip_tags($content), 200);
    }

    /**
     * Get the published date (backward compatible)
     */
    public function getPublishedAtAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // Fallback to old 'date_publish' field
        return $this->date_publish;
    }

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (!$blog->slug) {
                $blog->slug = Str::slug($blog->title);
            }
            
            if (!$blog->status) {
                $blog->status = 'draft';
            }
        });
    }
}
