@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Product</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="text-success form-label"><b> Nama Product </b></label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                            <label class="text-success form-label"><b> Price </b></label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            <label class="text-success form-label"><b> Description </b></label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                            <label class="text-success form-label"><b> Id Brand </b></label>
                            <input type="text" class="form-control" name="id_brand" value="{{ $product->id_brand }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('/images/product/' . $product->cover) }}" width="300" >
                        </div>
                        <a href="{{url('product')}}" class="btn btn-dark">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
