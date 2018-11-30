@extends('admin.layout')

@section('title','Halaman Kelas')

@section('page_title','Kelas')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-xs-6"><h2>Menampilkan data kelas  </h2></div>
                    <div class="col-xs-6 text-right"><a href="/app/admin/kelas/add" class="btn-sm btn btn-success" title="Tamabh Kelas"><i class="fa fa-plus"></i></a></div>
                </div>
            </div>
            <div class="body">
                <div class="table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kelas</th>
                                <th>Kategori</th>
                                <th class="text-center">Enroll</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kelas as $key => $val)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$val['nama_kelas']}}</td>
                                    <td>{{$val->getKategori->nama}}</td>
                                    <td class="text-center">{{count($val->getEnroll)}}</td>
                                    <td>{{$val->getUser->name}}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="/app/admin/kelas/{{$val['id']}}/edit"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a title="Materi" class="btn btn-primary btn-sm" href="/app/admin/kelas/{{$val['id']}}/materi"><i
                                                    class="fa fa-book"></i></a>
                                        <a title="User Enroll" class="btn btn-primary btn-warning" href="/app/admin/kelas/{{$val['id']}}/enroll"><i
                                                    class="fa fa-users"></i></a>
                                        <a onclick="return confirm('Apakah anda ingin menghapus kelas ini ?');" class="btn btn-danger btn-sm" href="/app/admin/kelas/{{$val['id']}}/delete"><i
                                                    class="fa fa-trash"></i></a>
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

@endsection
