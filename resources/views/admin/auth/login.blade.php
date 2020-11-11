<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ======================-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="">

        <!-- Title Name
        ================================-->
        <title>Azyan</title>

        <!-- Fave Icons
        ================================-->
        <link rel="shortcut icon" href="{{asset('assets/admin/images/fav-icon.png')}}">

        <!-- Google Web Fonts
        ===========================-->
        <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css">

        <!-- Css Base And Vendor
        ===================================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="{{asset('assets/admin/vendor/animation/animate.css')}}">

        <!-- Site Css
        ====================================-->
        <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    </head>
    <body>
        <div class="log-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-register">
                            {{-- <div class="logo"><img src="{{asset('storage/uploads/logo/'.$settings->image)}}"></div> --}}
                            <form   action="{{ url('login')}}" method="post">
                               {{-- @csrf --}}
                                {{ csrf_field() }}
                                <div class="alert alert-success hidden " id="headLogActionSuccess"></div>
                                <div class="alert alert-danger hidden " id="headLogActionError"></div>

                                <div class="form-group">
                                    <input type="text" placeholder="Username or email" name="email" class="form-control inputs">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control inputs">
                                </div>
                                <div class="form-group">
                                    <div class="remember">
                                        <input name="remember" id="remember" type="checkbox">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="custom-btn" type="submit">Login</button>
                                </div>
                                <div class="spacer-15"></div>
                            </form>
                        </div>
                    </div>
                </div><!--End row-->
            </div>
        </div>
        <!-- JS Base And Vendor
        ===================================-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/vendor/datepicker/jquery.datetimepicker.full.min.js"></script>
        <script type="text/javascript" src="{{asset('assets/admin/vendor/datatables.min.js')}}"></script>

        <!--JS Main
        ====================================-->
        <script src="{{asset('assets/admin/js/main.js')}}"></script>

        <!-- authentication validation -->
        <script src="{{asset('assets/admin/js/jquery.validate.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/admin/js/login.js')}}" type="text/javascript"></script>
    </body>
</html>