<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->orderBy('name')->get();
        $products = Product::where('is_active', true)->get();

        $breadcrumbs = [
            ['title' => 'Products']
        ];

        return view('products.index', compact('categories', 'products', 'breadcrumbs'));
    }

    public function bySubcategory(Subcategory $subcategory)
    {
        $products = $subcategory->products()->where('is_active', true)->get();
        $category = $subcategory->category; // Get the parent category

        $breadcrumbs = [
            ['title' => 'Products', 'url' => route('products.index')],
            ['title' => $category->name, 'url' => route('products.by-category', $category->slug)],
            ['title' => $subcategory->name]
        ];

        // Define the view path based on the subcategory slug
        $viewPath = 'products.subcategories.' . $subcategory->slug;

        return view($viewPath, compact('subcategory', 'products', 'breadcrumbs'));
    }

    public function byCategory(Category $category)
    {
        $products = $category->products()->where('is_active', true)->get();

        $breadcrumbs = [
            ['title' => 'Products', 'url' => route('products.index')],
            ['title' => $category->name]
        ];

        // Define the view path based on the category slug
        $viewPath = 'products.categories.' . $category->slug;

        return view($viewPath, compact('category', 'products', 'breadcrumbs'));
    }
}
