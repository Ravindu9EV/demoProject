@extends('layouts.app')

@section('contact-us')
<div class="row h-100  justify-content-center">
    <div class="col-lg-6 self-center">
        <div class="card">
            <h1>This is Contact Us Page</h1>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni similique voluptate voluptatem corporis nisi itaque sint perferendis animi facilis impedit voluptatum earum, aut numquam aspernatur inventore quis commodi. Placeat, dolorem.</p>
        </div>

        <a href="{{ route('home')}}">Home</a>
        <a href="{{ route('dashboard')}}">Dashboard</a>
    </div>
</div>

@endsection
