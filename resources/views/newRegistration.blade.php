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
<div data-role="page" id="newRegistration">
    <div data-role="header">
        <a data-rel="back" data-icon="cancel"></a>
        <h1>New Registration</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <form>
            <label for="firstName">First Name</label>
            <input type="text" name="FirstName" id="firstName" value=""  />
            <label for="lastName">Last Name</label>
            <input type="text" name="LastName" id="lastName" value=""  />
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />
            <label for="zipcode">Zipcode</label>
            <input type="number" name="Zipcode" id="zipcode" value=""  />
            <label for="email">Email (optional)</label>
            <input type="email" name="email" id="email" value=""  />
        </form>
    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>

</html>
