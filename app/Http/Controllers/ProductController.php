<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('dashboard.produk.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Query ke database untuk mengambil data sesuai id
        return response()->json($product);
    }

    public function show_product(Product $product)
    {
        return view('page.detail_produk', compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
        ]);

        $validatedData['image'] = time() . '_' . $request->input('name') . ".png";
        $request->file('image')->move(public_path('assets/img'), $validatedData['image']);
        $product = Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function update(Product $product, Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'image' => 'required|image',
        'category_id' => 'required',
    ]);

    // Delete old image
    if ($request->file('image')) {
        $img_path = public_path() . '/assets/img/' . $product->image;
        unlink($img_path); // Delete image
    }

    $validatedData['image'] = time() . '_' . $request->input('name') . ".png";
    $request->file('image')->move(public_path('assets/img'), $validatedData['image']);

    $product->update($validatedData);

    return Redirect::route('products.index')->with('success', 'Product updated successfully.');
}

    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('products.index')->with('success', 'Product deleted successfully.');
    }
}
