@extends('admin.layout')

@section('title','Detail Enroll Kelas - '.$kelas['nama_kelas'])

@section('page_title','Detail Enroll Kelas')

@section('content')

    <div class="col-md-12">

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Enroll</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                             data-fresh-interval="20">{{count($enroll)}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons fa fa-user"></i>
                    </div>
                    <div class="content">
                        <div class="text">Men Enroll</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                             data-fresh-interval="20">{{count($enrollMen) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons fa fa-user"></i>
                    </div>
                    <div class="content">
                        <div class="text">Women Enroll</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                             data-fresh-interval="20">{{count($enrollWomen )}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Detail Enroll Kelas - {{$kelas['nama_kelas']}}</h2>
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enroll as $key => $value)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$value->getUser->name}}</td>
                                    <td>{{$value->getUser->email}}</td>
                                    <td>@if($value->getUser->sex == '0') Women @else Men @endif</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {!! $enroll->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection