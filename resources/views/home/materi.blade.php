<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course - News Post</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{url('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('styles/news_post_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('styles/news_post_responsive.css')}}">
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
        @foreach($detail as $x)
            <div class="home_content">
                <h2>{{$x->nama}}</h2>
            </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Post Column -->


                <div class="col-lg-8">

                    <div class="news_post_container">
                        <!-- News Post -->
                        <div class="news_post">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a style="font-size: 20px" class="nav-item nav-link active" id="nav-home-tab"
                                       data-toggle="tab"
                                       href="#nav-home" role="tab" aria-controls="nav-home"
                                       aria-selected="true">Materi</a>
                                    <a style="font-size: 20px" class="nav-item nav-link" id="nav-profile-tab"
                                       data-toggle="tab"
                                       href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Diskusi</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div style="margin-bottom: 20px" class="tab-pane fade show active" id="nav-home"
                                     role="tabpanel"
                                     aria-labelledby="nav-home-tab">


                                    <div class="news_post_top d-flex flex-column flex-sm-row">

                                    </div>
                                    <div class="news_post_text">
                                        <p style="color: #0D0A0A; font-size: 14px">{{$x->konten}}</p>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div class="leave_comment">

                                        <div class="leave_comment_form_container">
                                            <div id="disqus_thread"></div>
                                            <script>
                                                var disqus_config = function () {
                                                    var identifier = "<?php echo $getid; ?>";
                                                    var urls = "<?php url('') ?>";
                                                    this.page.url = urls;  // Replace PAGE_URL with your page's canonical URL variable
                                                    this.page.identifier = identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                };

                                                (function () { // DON'T EDIT BELOW THIS LINE
                                                    var d = document, s = d.createElement('script');
                                                    s.src = 'https://woobrain.disqus.com/embed.js';
                                                    s.setAttribute('data-timestamp', +new Date());
                                                    (d.head || d.body).appendChild(s);
                                                })();
                                            </script>
                                            <noscript>Please enable JavaScript to view the <a
                                                        href="https://disqus.com/?ref_noscript">comments
                                                    powered by Disqus.</a></noscript>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>


                </div>
            @endforeach
            <!-- Sidebar Column -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Archives -->

                        <div class="sidebar_section">
                            <div class="sidebar_section_title">
                                <h3>Materi</h3>
                            </div>

                            <ul class="list-group">
                                @foreach($kelaskonten as $konten)
                                    <a href="{{route('kelaskonten', ['kelas_id'=>$konten->id_kelas, 'id'=>$konten->id])}}" style="color: #0D0A0A"
                                       class="list-group-item list-group-item-action">{{$konten->nama}}</a>

                                @endforeach
                            </ul>



                        </div>

                        <!-- Latest Posts -->


                    </div>
                </div>
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