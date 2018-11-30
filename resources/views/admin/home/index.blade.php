@extends('admin.layout')


@section('title','Dashboard Women Creative')

@section('page_title','Home')

@section('content')

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">User register</div>
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

@endsection