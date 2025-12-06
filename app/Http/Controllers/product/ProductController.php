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
        if($response['products']=Product::all()){
            return view('pages.product.all.index')->with($response);
        }

    }

    /**
     * Method create
     *
     * @return void
     */
    public function create()
    {

        return view('pages.product.create.productForm');
    }
    /**
     * Method store
     *
     * @param ProductCreateRequest $request [explicite description]
     *
     * @return void
     */
    public function store(ProductCreateRequest $request)
    {
         //dd($request->all());
        if(Product::create($request->all())){
            return redirect()->route('products.index')->with('slert-success','Product Stored successfully.');// use $request->all() when input field's name and table columns are equal
        }
         return redirect()->route('products.save')->with('alert-error','Fialed to Save the product');
    }

    /**
     * Method show
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function show($id)
    {
        if($response['product'] = Product::find($id)){
            return view('pages.product.show.show')->with($response);
        }
        return redirect()->route('products.index')->with('alert-error','Product cannot be found!');

    }

    /**
     * Method edit
     *
     * @param string $id [explicite description]
     *
     * @return void
     */
    public function edit(string $id){
        if($response['product'] = Product::find($id)){
            return view('pages.product.edit.edit')->with($response);
        }
        return redirect()->route('products.index')->with('alert-error','Product Cannot be found');
    }

    /**
     * Method update
     *
     * @param Request $request [explicite description]
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function update(Request $request,$id)
    {
        if(Product::find($id)->update($request->all()))return redirect()->route('products.index')->with('alert-success','Product Updated Successfully');
        return redirect()->route('products.index')->with('alert-error','Failed to Update the Product!!!');
    }

    /**
     * Method destroy
     *
     * @param string $id [explicite description]
     *
     * @return void
     */
    public function destroy(string $id){

        if(Product::find($id)->delete($id)){
            return redirect()->route('products.index')->with('alert-success','Product Deleted successfully!');
        }
        return redirect()->route('products.index')->with('alert-error','Failed to delete the Product!');

    }


}
