<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'discount' => 'nullable|numeric|min:0|max:100',
        ]);

        $discountedPrice = $validated['price'] - ($validated['price'] * ($validated['discount'] / 100));
        $totalPrice = $discountedPrice * $validated['qty'];

        return view('product', [
            'productDetails' => [
                'product_name' => $validated['product_name'],
                'price' => $validated['price'],
                'qty' => $validated['qty'],
                'discounted_price' => $totalPrice,
            ],
        ]);
    }
}
