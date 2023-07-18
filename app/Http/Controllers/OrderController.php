<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        $users = User::where('role_id', 2)->get();
        $categories = Category::all();
        return view('dashboard.order.index', compact('orders', 'products', 'users', 'categories'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id); // Query ke database untuk mengambil data sesuai id
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'address' => 'required',
            'send_method' => 'required',
        ]);

        $order = Order::create($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function update(Order $order, Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'address' => 'required',
            'send_method' => 'required',
        ]);

        $order->update($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
