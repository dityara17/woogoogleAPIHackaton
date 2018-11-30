@extends('admin.layout')

@section('title','Halaman Tambah User')
@section('page_title','Tambah User')

@section('content')
    
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Tambah User</h2>
            </div>
            <div class="body">
                <form action="/app/admin/user/add" method="post">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required placeholder="Nama anda">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Email anda">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Jenis kelamin</label>
                            <select name="sex" id="" class="form-control">
                                <option value="1">Laki-laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="2">Clint</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password" required placeholder="password anda">
                        </div>
                    </div>
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
    