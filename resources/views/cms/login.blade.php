<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login page</title>
    <meta name="author" content="Ahmad Yousuf"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{URL::asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="{{URL::asset('dist/css/style.css')}}" rel="stylesheet" >
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.html">
                <img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
                <span class="brand-text">Rahimi Wholsale</span>
            </a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">

            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign in to Your Account</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your email and password</h6>
                                </div>
                                <div class="form-wrap">

                                    <form role="form" action="{{route('login')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                            <input type="email" class="form-control" required= id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
                                            @if($errors->has('email'))
                                                <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            <!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
                                            <div class="clearfix"></div>
                                            <input type="password" class="form-control" required id="password" placeholder="Enter pwd" name="password">
                                            @if($errors->has('password'))
                                                <div class="error">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary  btn-rounded">sign in</button>
{{--                                            <button type="submit" class="btn btn-primary my-4">Sign in</button>Sorry, your session has expired. Please refresh and try again--}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{URL::asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{URL::asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{URL::asset('dist/js/init.js')}}"></script>
</body>
</html>
