<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('page.home');
    }

    public function about()
    {
        return view('page.about');
    }

    public function ourbrand()
    {
        $category = Category::all();
        return view('page.ourbrand', compact('category'));
    }

    public function showBrand(Category $category)
    {
        $category = Category::where('id', $category->id)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('page.list_produk', compact('category', 'products'));
    }
}
