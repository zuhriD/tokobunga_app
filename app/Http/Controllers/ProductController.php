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
            'image' => 'nullable|image',
            // Allow image to be nullable (optional)
            'category_id' => 'required',
        ]);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            $img_path = public_path() . '/assets/img/' . $product->image;
            if (file_exists($img_path)) {
                unlink($img_path); // Delete the old image
            }

            // Save the new image with a unique filename
            $validatedData['image'] = time() . '_' . $request->input('name') . ".png";
            $request->file('image')->move(public_path('assets/img'), $validatedData['image']);
        }

        $product->update($validatedData);

        return Redirect::route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('products.index')->with('success', 'Product deleted successfully.');
    }
}
