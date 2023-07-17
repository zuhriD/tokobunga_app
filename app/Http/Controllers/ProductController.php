<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index_product()
    {
        $products = Product::all();
        return view('index_product', compact('products'));
    }

    public function show_product(Product $product)
    {
        return view('show_product', compact('product'));
    }

    public function create_product()
    {
        return view('create_product');
    }

    public function edit_product(Product $product)
    {
        return view('edit_product', compact('product'));
    }

    public function store_product(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = time() . ".png";
            $request->file('image')->move(public_path('assets/img'), $validatedData['image']);
            Product::create($validatedData);
        }

        return Redirect::route('index_product');
    }

    public function update_product(Product $product, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        $product = Product::find($request->id);

        //Check if product is found
        if ($product) {

            //Check if has image
            if ($request->file('image')) {

                // Delete old image
                $img_path = public_path() . '/assets/img' . $product->image;
                unlink($img_path); // Delete image

                // Upload new image
                $validatedData['image'] = time() . ".png";
                $request->file('image')->move(public_path('assets/img'), $validatedData['image']);
                $product->update($validatedData);
                return ['status' => 'success', 'message' => 'Image updated successfully'];
            } else {
                $product->update($validatedData);
                return ['status' => 'success', 'message' => 'Image updated successfully'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Image not found'];
        }
    }

    public function delete_product(Product $product)
    {
        $product->delete();
        return Redirect::route('index_product');
    }
}
