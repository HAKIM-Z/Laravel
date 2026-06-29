<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Message;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

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

    public function contact_show()
    {
        return view('ecomm.pages.auth.contact');
    }

    public function message_store(Request $request)
    {
        Message::create($request->except('_token'));
    }
}
