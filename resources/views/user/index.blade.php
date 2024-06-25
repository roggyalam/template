@extends('layouts.backend')
@section('content')
<div class="col-xl-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">List Admin</h5>
        </div><!-- end card header -->

        <div class="card-body">
            <div> <a href="{{route ('user.create')}}" type="button" class="btn btn-info  rounded-pill">ADD USER</a></div>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">is_admin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item )
                        <tr>
                            <th scope="row">{{ $loop->index+1}}</th>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->is_admin ? 'Admin' : 'User'}}</td>
                            <td><a href="{{route ('user.show', $item->id)}}" type="button" class="btn btn-warning rounded-pill">SHOW</a>
                                <a href="{{route ('user.edit', $item->id)}}" type="button" class="btn btn-warning rounded-pill">EDIT</a>
                            <button type="button" class="btn btn-danger  rounded-pill">HAPUS</button></td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
