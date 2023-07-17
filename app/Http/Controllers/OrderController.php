<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index_order()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function checkout(Product $product, Request $request)
    {
        $product = $product->name;
        $category_id = $product->category_id;
        $price = $product->price;

        $validatedData = $request->validate([
            'quantity' => 'required',
            'address' => 'required',
            'send_method' => 'required',
        ]);
    }
}
