<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="img/logo_100_100.png">
    <title>CONIT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Soluciones Innovadoras para tu negocio" />
    <meta name="keywords" content="paginas web, tiendas online, e-commerce, social media, crm, erp">
    <meta name="author" content="Conit">

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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QE0NFE17M9"></script>
<!-- 
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QE0NFE17M9');
</script>
<script defer src="https://widget.tochat.be/bundle.js?key=5cfb641c-3476-49a6-96e7-66964d8ae7e1"></script> -->

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