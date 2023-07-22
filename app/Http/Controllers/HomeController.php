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

    public function show_brand($id)
    {
        $category = Category::where('id', $id)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('page.list_produk', compact('products', 'category'));
    }
}
