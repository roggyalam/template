@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Brand</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{ $brand->name_brand }}">
                        </div>
                        <a href="{{url('brand')}}" class="btn btn-secondary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
