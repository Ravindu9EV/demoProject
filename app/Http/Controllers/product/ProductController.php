<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product.productForm');
    }

    public function store(Request $request)
    {
         //dd($request->all());
        Product::create($request->all());//use $request->all() when input field's name and table columns are equal
    }
}
