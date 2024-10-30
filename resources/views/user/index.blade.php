@extends('layouts.backend')
@section('content')
<div class="col-xl-6">
    <div class="card">
        <div class="card-header shadow">
            <h5 class="card-title mb-0">List Admin</h5>
        </div><!-- end card header -->

        <div class="card-body shadow">
            <div> <a href="{{route ('user.create')}}" type="button" class="btn btn-info  rounded-pill">ADD USER</a></div>
            <div class="table-responsive">
                <table class="table table-striped mb-0 ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
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
                            <td><a href="{{route ('user.show', $item->id)}}" type="button" class="btn btn-info rounded-pill">SHOW</a>
                                <a href="{{route ('user.edit', $item->id)}}" type="button" class="btn btn-warning rounded-pill">EDIT</a>
                                <a class="btn ripple btn-danger px-2 rounded-pill" href="#"
                                onclick="event.preventDefault();
                                              document.getElementById('destroy-form').submit();">
                                HAPUS
                             </a>

                             <form id="destroy-form" action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-none">
                                @method('DELETE')
                                @csrf
                             </form>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
