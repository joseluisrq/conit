<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="img/logo_100_100.png">
    <title>CONIT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/odometer-theme-default.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/logo.css" rel="stylesheet">
    <link href="css/vinieta.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/costos.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  
</head>

<body>
    <div class="flex-center position-ref full-height" id="app">
         <div class="content">        
            <app></app>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>  
    <script src="js/script.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>