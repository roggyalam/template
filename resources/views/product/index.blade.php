@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Product</div>

                <div class="card-body">
                <a href="{{route('product.create')}}" class="btn btn-primary">Add Data</a>
                @if(session('success'))
                <div class="alert alert-success fade show " role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Id Brand</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach ($product as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->name_product }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->brand->name_brand }}</td>
                            <td><img src="{{ asset('/images/product/' . $data->cover) }}" width="100" ></td>
                            <form action="{{route('product.destroy', $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td>
                                <a href="{{route('product.edit', $data->id)}}" class="mt-2 btn btn-success">Edit</a>
                                <a href="{{route('product.show', $data->id)}}" class="mt-2 btn btn-warning">Show</a>
                                <button type="submit" class="mt-2 btn btn-danger"
                                onclick="return confirm('Yang bener mau dihapus? ')">Delete</button>
                            </td>
                            </form>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
