<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('dashboard.kategori.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id); // Query ke database untuk mengambil data sesuai id
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image',
            'banner' => 'required|image',
        ]);
        $validatedData['image'] = time() . '_' . $request->input('name') . "imgkategori.png";
        $request->file('image')->move(public_path('assets/img'), $validatedData['image']);

        $validatedData['banner'] = time() . '_' . $request->input('name') . "bannerkategori.png";
        $request->file('banner')->move(public_path('assets/img'), $validatedData['banner']);
        $category = Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image',
            'banner' => 'required|image',
        ]);

        // Delete previous image and banner files
        File::delete(public_path('assets/img/') . $category->image);
        File::delete(public_path('assets/img/') . $category->banner);

        $validatedData['image'] = time() . '_' . $request->input('name') . "imgkategorinew.png";
        $request->file('image')->move(public_path('assets/img'), $validatedData['image']);

        $validatedData['banner'] = time() . '_' . $request->input('name') . "bannerkategorinew.png";
        $request->file('banner')->move(public_path('assets/img'), $validatedData['banner']);

        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
