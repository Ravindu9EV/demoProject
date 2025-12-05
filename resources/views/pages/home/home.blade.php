@extends('layouts.app')


@section('page')
  <div class="row h-100  justify-content-center">
            <div class="col-lg-6 self-center">
                <div class="card">
                    <div class="card-body">
                        <h1>This is Home Page</h1>
                        <p class="content">Content</p>
                    </div>
                </div>
                <a href="{{ route('about_us')}}">About Us</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>

@endsection

