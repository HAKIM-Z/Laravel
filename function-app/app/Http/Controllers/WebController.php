<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $products = Product::with('cat', 'image')->paginate(4);
        return view('ecomm.pages.index', compact('products'));
    }

    public function product_details($id)
    {
        $product = product::with('cat', 'image')->find($id);
        return view('ecomm.pages.details', compact('product'));
    }
}
