@include('sweetalert::alert')

<header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <div class="logo_container">
            <div class="logo">
                <img src="{{url('images/woobrain.png')}}" alt="">
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="{{route('home')}}">home</a></li>
                    <li class="main_nav_item"><a href="{{route('course')}}">kelas</a></li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <img src="{{url('images/man.svg')}}" alt="">
        <span>{{Session::get('login')}}</span>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>