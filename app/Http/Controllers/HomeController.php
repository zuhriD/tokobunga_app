<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productNew = Product::orderBy('created_at', 'desc')->take(4)->get();
        $productFF = Product::where('category_id', 2)->take(4)->get();
        $productAF = Product::where('category_id', 3)->take(4)->get();
        return view('page.home', compact('productNew', 'productFF', 'productAF'));
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
