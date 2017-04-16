<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mina | Mina Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/plugins/animate-it/animate.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
</head>

<body class="login2">
    
    <!-- Login Div Start Here -->
    <div class="login animated flipInY" id="logindiv">   
        <div class="text-center logo">
            <img src="{{asset('images/logo-c.svg')}}" alt="logo">
        </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>                        

            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right">LOGIN</button>
            </div>
            
            <div class="clearfix mt-md">
                Selamat Datang di Aplikasi Mina Corp. Silahkan Login untuk meneruskan pekerjaan.
            </div>
        </form>

    </div>  
    <!-- Login Div Ends Here -->
    

    <script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/plugins.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/validation/additional-methods.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/page-login2.js')}}"></script>
</body>
</html>