@extends('admin.layout')

@section('title','Halaman Kategori')

@section('page_title','Kategori')

@section('content')

    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Kategori
                        {{--<small>Basic example without any additional modification classes</small>--}}
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <th scope="row">{{$key+=1}}</th>
                                <td>{{$category['nama']}}</td>
                                <td>
                                    <a href="/app/admin/kategori/{{$category['id']}}/edit" title="Edit"
                                       class="btn btn-success"><i
                                                class="fa fa-pencil"></i></a>
                                    <a href="/app/admin/kategori/{{$category['id']}}/delete"
                                       onclick="return confirm('Apakah anda ingin menghapus kategori ini ?');"
                                       title="Hapus" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Kategori
                        {{--<small>Basic example without any additional modification classes</small>--}}
                    </h2>
                </div>
                <div class="body">
                    <div class="form">
                        <form action="{!! url('app/admin/kategori/add') !!}" method="post"
                              enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group ">
                                <div class="form-line">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Kategori"
                                           required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="form-line">
                                    <label for="">Deskripsi</label>
                                    <textarea name="desc" id="" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="form-line">
                                    <label for="">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
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