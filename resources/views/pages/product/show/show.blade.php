@extends('layouts.app')

@section('product')
<div class="row h-100 justify-content-center">
    <div class="col-lg-8 self-center">
        <div class="card shadow">
            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-dark" style="float: right;">New Product</a>
                <h1>New Product</h1>


                <ul>
                    <li>Title: {{ $product->title }}</li>
                    <li>Price: {{ $product->price }}</li>
                    <li>Description: <strong>{{ $product->description}}</strong></li>
                </ul>

            </div>
        </div>
    </div>
</div>

@endsection
