<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(); // Adjust the condition as needed
        $categories = Category::all();
        $banners = Banner::all();
        return view('products.index', compact('products', 'categories', "banners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all(); // Adjust the condition as needed
        $categories = Category::all();
        return view('products.create',compact('products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
{
    $request->validate([
        'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules
        'name' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required', // Add validation for description
    ]);

    $imagePath = $request->file('img')->store('product', 'public'); // Store the image in the storage/app/public directory
    $imageUrl = Storage::url($imagePath);

    Product::create([
        'img' => $imageUrl,
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'category_id' => $request->input('category_id'),
        'description' => $request->input('description'), // Add the description
    ]);

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $products = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit',compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required', // Add validation for description
        ]);

        if ($product->img && Storage::disk('public')->exists($product->img)) {
            Storage::disk('public')->delete($product->img);
        }

        $imagePath = $request->file('img')->store('product_images', 'public');
        $imageUrl = Storage::url($imagePath);
        $product->img = $imageUrl;

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description'); // Set the description
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
