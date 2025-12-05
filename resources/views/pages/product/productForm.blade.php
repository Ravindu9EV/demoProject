@extends('layouts.app')

@section('product')
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 self-center">
        <div class="card">
            <div class="card-body">
                <h1>This is Product Form</h1>


                <form  action="{{ route('product.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text"  class="form-control" name="title" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" step="0.00" class="form-control" name="price" >
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <div class="form-group">
                          <label for="">Textarea</label>
                          <textarea class="form-control" name="description"  rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
