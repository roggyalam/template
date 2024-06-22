@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Product</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('product.update', $product->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="text-success form-label">Nama Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                            <label class="text-success form-label"><b> Price </b></label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            <label class="text-success form-label"><b> Description </b></label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                            <label class="text-success form-label"><b> Id Brand </b></label>
                            <select class="form-control" name="id_brand">
                            @foreach($brand as $data)
                                <option value="{{$data->id}}" {{ $data->id == $product->id_brand ? 'selected' : '' }}>{{$data->name_brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img class="m-5" src="{{ asset('/images/product/' . $product->cover) }}" width="300" >
                            <input type="file" class="mt-3 form-control" name="cover">
                        </div>
                        <button href="{{url('product')}}" class="btn btn-primary">Edit</button>
                        <a href="{{url('product')}}" class="btn btn-secondary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
