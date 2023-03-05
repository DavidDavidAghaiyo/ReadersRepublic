<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $data = Product::all();
        return view("customers/multiple-products", ['products' => $data]);
    }

    public function detailedProduct(Request $request)
    {
        return view("customers/detailed-product");
    }

    public function showProducts()
    {
        $products = Product::all();
        return view("admins/view-products", compact('products'));
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('customers/detailed-product', ['products' => $data]);
    }
}
