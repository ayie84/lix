<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Our Best Technology - Login panel</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="public/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="public/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Administrator</strong> Area</h1>  
                        </div>-->
                    </div>
                    <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
        <div class="form-top">
            <div class="form-top-left">
                <h3><strong>ORDER/REPAIR STATUS</strong></h3>
                <img width="500px" class="logo" src="img/logo_nav.png" align="center"></br>
                <p>Masukkan <strong>NRIC</strong> anda dalam kotak di bawah untuk mendapatkan status baik pulih dalam masa sebenar.</p>
            </div>
            <div class="form-top-right">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="form-bottom">
            <form class="login-form" method="POST" action="{{ url('/search') }}">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span> 
                        <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                         @if ($errors->has('username'))
                            <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                            </span>
                         @endif
                    </div>
                </div>
                <button type="submit" class="btn">Check Status</button>
            </form>
        </div>
    </div>
</div>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>