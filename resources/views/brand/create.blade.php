@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Brand</div>
                <div class="card-body">
                    <form method="POST" action=" {{ route('brand.store')}} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Brand</label>
                            <input type="text" class="form-control" name="name_brand">
                        </div>
                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
