@extends('layouts.backend')
@section('content')
<div id="wrapper">
    {{-- CONTENT --}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <h4 class="panel-heading mt-3 mb-2 text-center">
                            Edit user
                        </h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('user.update', $user->id) }}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-2 mt-3 mx-2 text-dark">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Nama User" value="{{$user->name}}" required>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-2 mt-3 mx-2 text-dark">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="Email" value="{{$user->email}}" required>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-2 mt-3 mx-2 text-dark">role</label>
                                            <select type="" class="form-control  @error('is_Admin') is-invalid @enderror"
                                                name="is_admin" placeholder="is_admin" required>
                                                <option value="1" {{$user ->is_admin ? 'selected' : ''}}>Admin</option>
                                                <option value="0" {{$user ->is_admin == 0 ? 'selected' : ''}}>User</option>
                                            </select>

                                            @error('is_admin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <a href="{{route('user.index')}}" class="mt-4 btn-danger btn btn-default">Kembali</a>
                                        <button type="submit" class="mt-4 btn-primary btn btn-info">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
