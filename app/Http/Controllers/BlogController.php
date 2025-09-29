<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display the blog listing page
     */
    public function index(Request $request)
    {
        // Get query parameters
        $category = $request->get('category');
        $search = $request->get('search');

        // Start building the query
        $query = Blog::with('category')
                    ->where('status', 'published')
                    ->orderBy('created_at', 'desc');

        // Apply category filter
        if ($category && $category !== 'all') {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category);
            });
        }

        // Apply search filter
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        // Get paginated results
        $blogs = $query->paginate(12);

        // Get featured blog (most recent)
        $featuredBlog = Blog::with('category')
                           ->where('status', 'published')
                           ->where('is_featured', true)
                           ->orderBy('created_at', 'desc')
                           ->first();

        // Get categories with blog count
        $categories = Category::withCount(['blogs' => function ($query) {
            $query->where('status', 'published');
        }])->orderBy('name')->get();

        // Get recent blogs for sidebar
        $recentBlogs = Blog::with('category')
                          ->where('status', 'published')
                          ->orderBy('created_at', 'desc')
                          ->limit(3)
                          ->get();

        // Get popular tags
        $popularTags = $this->getPopularTags();

        return view('site.blog', compact(
            'blogs',
            'featuredBlog',
            'categories',
            'recentBlogs',
            'popularTags'
        ));
    }

    /**
     * Display a specific blog post
     */
    public function show($id)
    {
        $blog = Blog::with('category')
                    ->where('status', 'published')
                    ->findOrFail($id);

        // Get related blogs
        $relatedBlogs = Blog::with('category')
                           ->where('status', 'published')
                           ->where('id', '!=', $id)
                           ->where('category_id', $blog->category_id)
                           ->orderBy('created_at', 'desc')
                           ->limit(3)
                           ->get();

        return view('site.blog-detail', compact('blog', 'relatedBlogs'));
    }

    /**
     * Handle newsletter subscription
     */
    public function subscribeNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscriptions,email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            // Here you would typically save to a newsletter_subscriptions table
            // For now, we'll just return success
            // NewsletterSubscription::create(['email' => $request->email]);

            return response()->json([
                'success' => true,
                'message' => 'Successfully subscribed to newsletter!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error subscribing to newsletter. Please try again.'
            ], 500);
        }
    }

    /**
     * Get popular tags from blog posts
     */
    private function getPopularTags()
    {
        // This is a simplified version - in a real app, you might have a tags table
        // For now, we'll return some common tags
        return [
            'Control Panels',
            'Automation',
            'SCADA',
            'IoT',
            'Safety',
            'Manufacturing',
            'Quality',
            'Maintenance',
            'Technology',
            'Innovation'
        ];
    }

    /**
     * API endpoint to get blog data for modal
     */
    public function getBlogApi($id)
    {
        $blog = Blog::with('category')
                    ->where('status', 'published')
                    ->findOrFail($id);

        return response()->json([
            'id' => $blog->id,
            'title' => $blog->title,
            'content' => $blog->content,
            'excerpt' => $blog->excerpt,
            'image_url' => $blog->image_url,
            'category' => $blog->category->name ?? 'Uncategorized',
            'author' => $blog->author,
            'created_at' => $blog->created_at,
            'updated_at' => $blog->updated_at
        ]);
    }

    /**
     * Search blogs
     */
    public function search(Request $request)
    {
        $search = $request->get('q');

        if (!$search) {
            return response()->json(['blogs' => []]);
        }

        $blogs = Blog::with('category')
                    ->where('status', 'published')
                    ->where(function ($query) use ($search) {
                        $query->where('title', 'like', "%{$search}%")
                              ->orWhere('content', 'like', "%{$search}%")
                              ->orWhere('excerpt', 'like', "%{$search}%");
                    })
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();

        return response()->json(['blogs' => $blogs]);
    }
}
