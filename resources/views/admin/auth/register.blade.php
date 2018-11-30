<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | wooBrain Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="{!! asset('admin/favicon.ico') !!}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{!! asset('admin/plugins/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{!! asset('admin/plugins/node-waves/waves.css') !!}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{!! asset('admin/plugins/animate-css/animate.css') !!}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{!! asset('admin/css/style.css') !!}" rel="stylesheet">
    {{--alert--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Register woo<b>Brain</b></a>
        {{--<small>Admin BootStrap Based - Material Design</small>--}}
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="{!! route('register') !!}">
                {!! csrf_field() !!}
                <div class="msg">Register wooBrain</div>
                <div class="form-group">
                    <div class="form-line">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" required placeholder="Nama anda">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="Email anda">
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <label for="">Jenis kelamin</label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Laki-laki</option>
                            <option value="0">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-line">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" required
                               placeholder="password anda">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">DAFTAR</button>
                    </div>
                </div>
                {{--<div class="row m-t-15 m-b--20">--}}
                {{--<div class="col-xs-6">--}}
                {{--<a href="sign-up.html">Register Now!</a>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6 align-right">--}}
                {{--<a href="forgot-password.html">Forgot Password?</a>--}}
                {{--</div>--}}
                {{--</div>--}}
            </form>
            <script>
                @if ($message = Session::get('error'))
                swal({
                    text: '<?php echo $message ?>',
                    icon: "error"
                });
                @endif
            </script>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{!! asset('admin/plugins/jquery/jquery.min.js') !!}"></script>

<!-- Bootstrap Core Js -->
<script src="{!! asset('admin/plugins/bootstrap/js/bootstrap.js') !!}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{!! asset('admin/plugins/node-waves/waves.js') !!}"></script>

<!-- Validation Plugin Js -->
<script src="{!! asset('admin/plugins/jquery-validation/jquery.validate.js') !!}"></script>

<!-- Custom Js -->
<script src="{!! asset('admin/js/admin.js') !!}"></script>
<script src="{!! asset('admin/js/pages/examples/sign-in.js') !!}"></script>
</body>

</html>