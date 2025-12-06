@extends('layouts.app')

@section('product')
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 self-center">
        <div class="card">
            <div class="card-body">
                <h1>This is Product Form</h1>


                <form  action="{{ route('products.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text"
                            class="form-control" name="title" id="inp-title" aria-describedby="helpId" value="{{ old('title')}}" placeholder="Enter here" required>
                          <small id="helpId" class="form-text text-muted">Please enter the product title</small>
                            @error('title')
                            <br>
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                       <label for="price">Price</label>
                          <input type="number"
                            class="form-control" value="{{ old('price')}}" name="price" step="0.01" id="inp-price" aria-describedby="inp-price-helpId" placeholder="Enter here" required>
                          <small id="inp-price-helpId" class="form-text text-muted">Please enter the Product Price</small>
                          @error('price')
                          <br>

                            <span class="text-danger error">{{ $message }}</span>
                          @enderror
                    </div>
                    <div class="form-group">
                        <label for="inp-description">Description</label>
                        <div class="form-group">
                          <textarea  id="inp-descripiton-heplId" class="form-control" value="{{ old('description')}}" type="hidden" name="inp-decsription" rows="3"></textarea>
                          <small id="inp-title-helpId"class="form-text text-muted">Please enter the product description</small>
                        @error('description')

                        <span class="text-danger error">{{ $message }}</span>

                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
