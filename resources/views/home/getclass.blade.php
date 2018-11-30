<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course - Courses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{url('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('styles/courses_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('styles/courses_responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

@include('home.slice.header')

<!-- Menu -->

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{url('images/splash.jpg')}})"></div>
        </div>
        <div class="home_content">
            <h1>kelas</h1>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>{{$nama_kategori}}</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                <!-- Popular Course Item -->
                @foreach($list as $value)
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
                            <div class="card-body text-center" style="padding-bottom: 30px">
                                <div class="card-title" style="padding-bottom: 10px"><a
                                            href="{{route('detailkelas', $value->id)}}">{{$value->nama_kelas}}</a></div>
                                <div class="card-text">{{$value->deskripsi}}</div>
                            </div>
                            <div class="price_box d-flex flex-row align-items-center">
                                <div class="course_author_name"> {{$value->getUser->name}} <span>Instructor</span></div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                    <span>FREE</span></div>
                            </div>
                        </div>

                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!-- Footer -->

    @include('home.slice.footer')

</div>

<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('styles/bootstrap4/popper.js')}}"></script>
<script src="{{url('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{url('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{url('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{url('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('plugins/easing/easing.js')}}"></script>
<script src="{{url('js/courses_custom.js')}}"></script>

</body>
</html>