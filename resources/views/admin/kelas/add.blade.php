@extends('admin.layout')

@section('title','Halaman Tambah Kelas')

@section('page_title','Tambah Kelas')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Tambah Kelas</h2>
            </div>
            <div class="body">
                <form action="/app/admin/kelas/add" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="form-line">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Kelas" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($cats as  $cat)
                                    <option value="{{$cat['id']}}">{{$cat['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="gambar"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label>Deskripsi</label>
                            <textarea name="desc" class="form-control"  rows="8" placeholder="Deskripsi Kelas" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection
