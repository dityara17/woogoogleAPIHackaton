@extends('admin.layout')

@section('title','Halaman Users')

@section('page_title','Halaman User')

@section('content')

    <div class="col-md-12">

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Users</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                             data-fresh-interval="20">{{count($users)}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons fa fa-user"></i>
                    </div>
                    <div class="content">
                        <div class="text">Men</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                             data-fresh-interval="20">{{count($usersMen) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons fa fa-user"></i>
                    </div>
                    <div class="content">
                        <div class="text">Women</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                             data-fresh-interval="20">{{count($usersWomen )}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>Data User wooBrain</h2>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="/app/admin/user/add" class="btn btn-success" title="Tambah user"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th width="10">#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="150">Sex</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $value)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>@if($value->sex == '0') Women @else Men @endif</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
