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
<div data-role="page" id="termsOfUse">
    <div data-role="header">
        <a data-icon="cancel" data-rel="back"></a>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <p>These are the terms of use. blah blah blah blah blah
            blah blah blah blah blah
            blah blah blah blah blah
            blah blah blah blah blah</p>
        <form>
            <input type="button" value="I Agree">
        </form>
    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>

</html>
