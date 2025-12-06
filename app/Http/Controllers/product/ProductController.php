<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\ProductCreateRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $response['products']=Product::all();
        return view('pages.product.all.index')->with($response);
    }

    public function create()
    {

        return view('pages.product.create.productForm');
    }
    public function store(ProductCreateRequest $request)
    {
         //dd($request->all());
        Product::create($request->all());
        return redirect()->route('products.index')->with('Success');// use $request->all() when input field's name and table columns are equal
    }

    public function show($id)
    {


        $response['product'] = Product::find($id);

        return view('pages.product.show.show')->with($response);
    }

    public function edit(string $id){
        $response['product'] = Product::find($id);
        return view('pages.product.edit.edit')->with($response);
    }

    public function update(Request $request,$id)
    {
        Product::find($id)->update($request->all());
        return redirect()->route('products.index');

    }

    public function destroy(string $id){
        Product::find($id)->delete($id);
        return redirect()->route('products.index');
    }


}
