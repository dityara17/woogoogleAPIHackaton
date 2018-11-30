@extends('admin.layout')

@section('optional_component')

@endsection

@section('title',$kelas['nama_kelas'].' | Tambah Materi ')

@section('page_title','Tambah Materi')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Tambah Materi - {{$kelas['nama_kelas']}}</h2>
            </div>
            <div class="body">
                <form action="/app/admin/kelas/{{$kelas['id']}}/materi/add" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Materi" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="">Isi Materi</label>
                            <textarea id="ckeditor" name="isi" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection