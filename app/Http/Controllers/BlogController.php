<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('author')->paginate(10);
        $breadcrumbs = [
            ['title' => 'Blog', 'url' => route('blog.index')]
        ];
        return view('blog.index', compact('blogs', 'breadcrumbs'));
    }

    public function show(Blog $blog)
    {
        $relatedBlogs = Blog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        $breadcrumbs = [
            ['title' => 'Blog', 'url' => route('blog.index')],
            ['title' => $blog->title]
        ];
        return view('blog.show', compact('blog', 'relatedBlogs', 'breadcrumbs'));
    }
}
