<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cat;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('cat', 'image')->get();

        return view('dashboard.pages.products.view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Cat::all();

        return view('dashboard.pages.products.add', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = $request->except('_token', 'img');

        $img = $request->only('img');

        $data = Product::create($product);

        $product_id = $data->id;

        Image::saveImg($img, $product_id);

        return to_route('product.index');
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
        $product = Product::find($id);

        $cats = Cat::all();

        return view('dashboard.pages.products.edit', compact('cats', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $old_img = Image::where('product_id', $id)->pluck('img_name');

        foreach ($old_img as $img) {

            unlink(storage_path("app/public/images/products/$img"));
        }

        Product::where('id', $id)->delete();

        Image::where('product_id', $id)->delete();

        return to_route('product.index');
    }
}
