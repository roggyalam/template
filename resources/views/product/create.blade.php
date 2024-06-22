@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Product</div>
                <div class="card-body">
                    <form method="POST" action=" {{ route('product.store')}} " enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Product</label>
                            <input type="text" class="form-control" placeholder="........." name="name_product">
                            <label class="form-label">Price</label>
                            <input type="text" class="mt-3 form-control" placeholder="........." name="price">
                            <label class="form-label">Description</label>
                            <input type="text" class="mt-3 form-control" placeholder="........." name="description">
                            <label class="form-label">Name Brand</label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                <option value="{{$data->id}}">{{$data->name_brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="mt-3 form-control" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
