<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>MapChat - About</title>


    <script>

        function redirect() {
            url = "app.php";
            $(location).attr("href", url);
        }

        $(document).ready(function () {


            function clearHeader() {

                var header_height = $(".header").outerHeight();
                $(".main-content-wrapper").css({"top": header_height});

            }
            clearHeader();
        });


    </script>



</head>

<body>

<?php
    include 'header.php';
?>


    <!-- Page Layout here -->
    <div class="row main-content-wrapper">

        <div class="col s12">

                <h4>About</h4>
                <div class="divider"></div>
                <p>Lorem ipsumjsdkaskdjas kasjdkasljdkasljdlkasjdl kasjdklasjdklsajdklasjdkl aksjdkasljdkasldj</p>



            <!-- Teal page content  -->
        </div>

    </div>

<?php
include 'footer.php';
?>








</body>

</html>