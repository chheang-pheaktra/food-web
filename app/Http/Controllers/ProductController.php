<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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

        Product::create([
            'title' => $request->title,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'thumbnail' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            // Delete the old thumbnail if it exists
            if ($product->thumbnail && \File::exists(public_path($product->thumbnail))) {
                \File::delete(public_path($product->thumbnail));
            }

            // Store new thumbnail
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset'), $imageName);
            $imagePath = 'asset/' . $imageName;
            $product->thumbnail = $imagePath;
        }

        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products=Product::find($id);
        $products->delete();
        return redirect()->back();
    }
}
