@extends('admin.layout')

@section('title','Halaman Materi Kelas')

@section('page_title','Materi Kelas')

@section('content')

    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Materi Kelas {{$kelas['nama_kelas']}}</h2>
            </div>
            <div class="body">
                <div class="image" style="margin-bottom: 10px;">
                    <img src="/images/kelas/{{$kelas['gambar']}}" alt=""
                         style="width: 100%;height: 220px;object-fit: cover">
                </div>
                <p><b>Kategori :</b> {{$kelas->getKategori->nama}} </p>
                <p><b>Author :</b> {{$kelas->getUser->name}} </p>
                <p><b>Deskripsi :</b></p>
                <div class="desc">
                    {{$kelas['deskripsi']}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-xs-6"><h2>Materi</h2></div>
                    <div class="col-xs-6 text-right"><a class="btn-sm btn btn-success"
                                                        href="/app/admin/kelas/{{$kelas['id']}}/materi/add"
                                                        title="Tambah Materi"><i class="fa fa-plus"></i></a></div>
                </div>
            </div>
            <div class="body">
                <smal>Materi Kelas</smal>
                <div class="table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Materi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materi as $key => $value)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$value['nama']}}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" title="Edit"
                                           href="/app/admin/kelas/{{$kelas['id']}}/materi/{{$value['id']}}/edit"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a class="btn btn-danger btn-sm" title="Hapus"
                                           href="/app/admin/kelas/{{$kelas['id']}}/materi/{{$value['id']}}/delete"><i
                                                    class="fa fa-trash"
                                                    onclick="return confirm('Apakah anda ingin menghapus materi ini ?');"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        @if ($message = Session::get('success'))
        swal({
            text: '<?php echo $message ?>',
            icon: "success"
        });
        @endif
    </script>

@endsection

