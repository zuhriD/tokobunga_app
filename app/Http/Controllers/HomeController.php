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
        return view('page.ourbrand');
    }

    public function flowers_box()
    {
        $products = Product::where('category_id', 1)->get();
        return view('page.produk.flowers_box', compact('products'));
    }

    public function fresh_flowers()
    {
        $products = Product::where('category_id', 3)->get();
        return view('page.produk.fresh_flowers', compact('products'));
    }

    public function artificial_flowers()
    {
        $products = Product::where('category_id', 3)->get();
        return view('page.produk.artificial_flowers', compact('products'));
    }

    public function hand_bouquet()
    {
        $products = Product::where('category_id', 4)->get();
        return view('page.produk.hand_bouquet', compact('products'));
    }

    public function standing_flowers()
    {
        $products = Product::where('category_id', 5)->get();
        return view('page.produk.standing_flowers', compact('products'));
    }

    public function gift_hampers()
    {
        $products = Product::where('category_id', 6)->get();
        return view('page.produk.gift_hampers', compact('Products'));
    }
}
