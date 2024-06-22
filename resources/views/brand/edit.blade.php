@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Brand</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('brand.update', $brand->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{ $brand->name_brand }}">
                        </div>
                        <button href="{{url('brand')}}" class="btn btn-primary">Edit</button>
                        <a href="{{url('brand')}}" class="btn btn-secondary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
