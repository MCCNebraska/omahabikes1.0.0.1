<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Omaha Bike Valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href ="{{asset ('/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>






</head>
<body class = "splash">
<div data-role="page" id="login">
    <div data-role="header">
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <form action="" method="">
            <h2>Login</h2>
            <label for="uInput">USERNAME</label>
            <input type="text" name="UserName" id="uInput" value="" />
            <label for="uPass">PASSWORD</label>
            <input type="text" name="password" id="uPass" class="login-field login-field-password"  />
            <p><a href="{{url('/newRegistration')}}">REGISTRATION</a></p>

            <a href="{{url('/volunteerWelcome')}}" class="ui-btn ui-corner-all">LOGIN</a>
        </form>

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>

</body>
</html>
