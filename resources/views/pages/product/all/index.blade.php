@extends('layouts.app')

@section('product')
<div class="row h-100 justify-content-center">
    <div class="col-lg-8 self-center">
        <div class="card shadow">
            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-dark" style="float: right;">New Product</a>
                <h1>All Products</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product )
                        <tr>
                            <td scope="row">{{$product->id}}</td>
                            <td >{{$product->title}}</td>
                            <td >${{$product->price}}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" onclick="deleteConfirm('{{ route('products.destroy', $product->id) }}','product')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

@endsection


