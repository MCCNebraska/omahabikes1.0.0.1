<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Omaha Bike Valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href ="{{asset('/css/style.css')}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>


</head>
<body>
<div data-role="page" id="chooseEvent">
    <div data-role="header">
        <a href="{{url ('/volunteerHours')}}" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">JOIN EVENT</a>

    </div><!-- /header -->
    <div role="main" class="ui-content">
    <ul data-role="listview" data-inset="true">
        <li><a href=""><p>EVENT 1 10:00am-12:00pm</p></a></li>
        <li><a href=""><p>EVENT 2 1:00pm-3:00pm</p></a></li>
        <li><a href=""><p>EVENT 3 5:00pm-7:00pm</p></a></li>
    </ul>

    </div><!-- /content -->

        <div data-role="footer">

            <h6>Note that events will only show up the day the event is scheduled to start</h6>

        </div><!-- /footer -->

</div>
</body>
</html>
