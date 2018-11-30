@extends('admin.layout')

@section('title','Halaman Edit Kategori')

@section('page_title','Edit Kategori')

@section('content')

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Kategori
                    {{--<small>Basic example without any additional modification classes</small>--}}
                </h2>
            </div>
            <div class="body">
                <div class="form">
                    <form action="/app/admin/kategori/{{$cat['id']}}/edit" method="post"
                          enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group ">
                            <div class="form-line">
                                <label for="">Nama</label>
                                <input type="text" name="nama" value="{{$cat['nama']}}" class="form-control"
                                       placeholder="Nama Kategori"
                                       required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label for="">Deskripsi</label>
                                <textarea name="desc" id="" cols="30" rows="4"
                                          class="form-control">{{$cat['deskripsi']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label for="">Gambar</label> <br>
                                <img src="{!! asset('images/kategori/'.$cat['gambar'].'') !!}" alt="{{$cat['nama']}}" width="250">
                                <br>
                                <input type="file" name="gambar" class="form-control" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
