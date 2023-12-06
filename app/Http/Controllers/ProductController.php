<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Product 1', 'price' => 2000],
            ['name' => 'Product 2', 'price' => 2500],
            ['name' => 'Product 3', 'price' => 1500],
        ];

        return view('products.index', ['products' => $products]);
    }
}
