<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        // Get base URL from config, ensure it's absolute
        $baseUrl = rtrim(config('app.url'), '/');
        if (empty($baseUrl) || !filter_var($baseUrl, FILTER_VALIDATE_URL)) {
            // Fallback to request URL if config is not set
            $baseUrl = request()->getSchemeAndHttpHost();
        }

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Static pages - use absolute URLs
        $staticPages = [
            ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['path' => '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/industries', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/portfolio', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['path' => '/blog', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['path' => '/contact', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ];

        foreach ($staticPages as $page) {
            $fullUrl = $baseUrl . $page['path'];
            $sitemap .= '  <url>' . "\n";
            $sitemap .= '    <loc>' . htmlspecialchars($fullUrl, ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $sitemap .= '    <priority>' . htmlspecialchars($page['priority'], ENT_XML1, 'UTF-8') . '</priority>' . "\n";
            $sitemap .= '    <changefreq>' . htmlspecialchars($page['changefreq'], ENT_XML1, 'UTF-8') . '</changefreq>' . "\n";
            $sitemap .= '  </url>' . "\n";
        }

        // Blog posts
        $blogs = Blog::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->get();

        foreach ($blogs as $blog) {
            $blogUrl = $baseUrl . '/blog/' . $blog->id;
            $sitemap .= '  <url>' . "\n";
            $sitemap .= '    <loc>' . htmlspecialchars($blogUrl, ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $sitemap .= '    <lastmod>' . htmlspecialchars($blog->updated_at->format('Y-m-d'), ENT_XML1, 'UTF-8') . '</lastmod>' . "\n";
            $sitemap .= '    <priority>0.7</priority>' . "\n";
            $sitemap .= '    <changefreq>monthly</changefreq>' . "\n";
            $sitemap .= '  </url>' . "\n";
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
