@extends('admin.layout')

@section('title','Halaman Edit Kelas')

@section('page_title','Edit Kelas')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Edit {{$kelas['nama_kelas']}}</h2>
            </div>
            <div class="body">
                <form action="/app/admin/kelas/{{$kelas['id']}}/edit" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="form-line">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Kelas"
                                   value="{{$kelas['nama_kelas']}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="">Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($cats as  $cat)
                                    <option @if($cat['id'] == $kelas['id_kategori']) selected
                                            @endif value="{{$cat['id']}}">{{$cat['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label>Gambar</label> <br>
                            <img src="{!! asset('images/kelas/'.$kelas['gambar'].'') !!}" alt="" width="250"> <br> <br>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label>Deskripsi</label>
                            <textarea name="desc" class="form-control" rows="8" placeholder="Deskripsi Kelas"
                                      required>{{$kelas['deskripsi']}}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Update</button>
                </form>
            </div>
        </div>

    </div>

@endsection
