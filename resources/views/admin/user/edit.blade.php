@extends('admin.layout')

@section('title','Halaman Edit User')
@section('page_title','Edit User')

@section('content')

    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Edit User</h2>
            </div>
            <div class="body">
                <form action="/app/admin/user/{{$user['id']}}/editData" method="post">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required placeholder="Nama anda" value="{{$user['name']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Email anda" value="{{$user['email']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Jenis kelamin</label>
                            <select name="sex" id="" class="form-control">
                                <option @if($user['sex'] == 1) selected @endif value="1">Laki-laki</option>
                                <option @if($user['sex'] == 0) selected @endif value="0">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option @if($user['role'] == 2) selected @endif value="2">Clint</option>
                                <option @if($user['role'] == 1) selected @endif value="1">Admin</option>
                            </select>
                        </div>
                    </div>
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Edit Password</h2>
            </div>
            <div class="body">
                <form action="/app/admin/user/{{$user['id']}}/editPass" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password" required placeholder="Kosongkan jika tidak ingin mengupdate">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>

@endsection
