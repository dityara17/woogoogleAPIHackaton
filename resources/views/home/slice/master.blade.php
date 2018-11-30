<!DOCTYPE html>
<html lang="en">
<head>
    <title>wooBrain</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

@include('home.slice.header')

<!-- Menu -->
    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="#">Home</a></li>
                    <li class="menu_item menu_mm"><a href="#">About us</a></li>
                    <li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
                    <li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
                    <li class="menu_item menu_mm"><a href="news.html">News</a></li>
                    <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
                </ul>

                <!-- Menu Social -->

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
            </div>

        </div>

    </div>

    <!-- Home -->

    <div class="home">

        <!-- Hero Slider -->
        @yield('slider')

    </div>

    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Kelas Kriya</h2>
                                <a href="#" class="hero_box_link">Belajar bersama</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/books.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Pustaka Kriya</h2>
                                <a href="#" class="hero_box_link">Lihat hasil kriya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/professor.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Berjejaring</h2>
                                <a href="#" class="hero_box_link">Lihat hasil kriya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>kelas populer</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                <!-- Popular Course Item -->
                @foreach($list as $value)
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="courses.html">{{$value->nama_kelas}}</a></div>
                                <div class="card-text">{{$value->deskripsi}}</div>
                            </div>
                            <div class="price_box d-flex flex-row align-items-center">
                                <div class="course_author_image">
                                    <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                                </div>
                                <div class="course_author_name">{{$value->getUser->name}} <span></span></div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                    <span>FREE</span></div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>



    @include('home.slice.footer')


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>