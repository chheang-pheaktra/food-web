<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:10240|mimes:jpeg,jpg,png',
        ]);

        $imagePath = null;

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset'), $imageName);
            $imagePath = 'asset/' . $imageName; // Set the image path
        }

        Category::create([
            'title' => $request->title,
            'thumbnail' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Category created successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset'), $imageName);
            $imagePath = 'asset/' . $imageName; // Set the image path
            $category->thumbnail=$imagePath;
        }

        $category->title = $request->title;
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully!');
    }


    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
