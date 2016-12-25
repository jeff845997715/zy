<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>登陆</title>

    <link href="{{ URL::asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin/css/style-responsive.css') }}" rel="stylesheet">
</head>

<body class="login-body">

<div class="container">

    {!! Form::open(['url'=>'/admin/admin/login', 'class'=>'form-signin']) !!}
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">登陆</h1>
            <img src="{{ URL::asset('assets/admin/images/login-logo.png') }}" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" name="account" class="form-control" placeholder="账户" >
            <input type="password" name="password" class="form-control" placeholder="密码">
            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
        </div>
    {!! Form::close() !!}
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/admin/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/modernizr.min.js') }}"></script>

</body>
</html>
