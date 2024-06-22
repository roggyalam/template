@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Brand</div>

                <div class="card-body">
                <a href="{{route('brand.create')}}" class="btn btn-primary">Add Data</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Brand</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach ($brand as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->name_brand }}</td>
                            <form action="{{route('brand.destroy', $data->id)}}" id="delete-data" method="post">
                                    @csrf
                                    @method('DELETE')
                            <td>
                                <a href="{{route('brand.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('brand.show', $data->id)}}" class="btn btn-warning">Show</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
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
