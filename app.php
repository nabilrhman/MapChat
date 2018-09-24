<!DOCTYPE html>
<html>

<head>

    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/header.css">
    <script type='text/javascript' src='js/map.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Resize-->
    <script src="js/ResizeSensor.js"></script>
    <script src="js/ElementQueries.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script>

        $(document).ready(function () {


            function resizeChatlist() {

                var input_height = $(".input").outerHeight();
                var app_container_height = $(".app-container").height();
                var resized_chat_list_height = app_container_height - input_height;
                //window.alert("resize fired");
                //window.alert("chat_list_height" + app_container_height);
                $(".chat-container").css({"height": resized_chat_list_height});

            }

            // Auto scroll
            var scrolled = false;

            function updateScroll() {
                if (!scrolled) {
                    $(".chat-container").animate({scrollTop: $(".chat-container").prop("scrollHeight")}, 1000);
                }
            }

            $(".chat-container").on('scroll', function () {
                scrolled = true;
            });


            // Resize event
            resizeChatlist();
            updateScroll();

            var input_message_element = document.getElementById('msg');

            new ResizeSensor(input_message_element, function () {


                $(".chat-container").animate({scrollTop: $(".chat-container").prop("scrollHeight")}, 1000);
                $(".input").animate({scrollTop: $(".input").prop("scrollHeight")}, 1000);
                resizeChatlist();

            });


        });

    </script>


</head>


<body class="animated fadeIn">


<!-- <div class="header">
    <a href="index.html" class="logo hvr-grow"></a>
    <div class="container pullLeft">
        <a>SIGNOUT</a>
        <a>PROFILE</a>
        <a>ABOUT</a>
    </div>
</div> -->

<?php
    include 'header.php';
?>

<div class="app-container">

    <div class="chat-container" id="chat-container">
        <div class="chat-list">

            <div class="chat hvr-glow" id="first">
                <img class="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar"
                     style="width:100%;">
                <h3 class="name">Nabil Rahman</h3>
                <p class="chat-paragraph">Hello. How are you today?</p>
                <span class="location">Boise</span>
                <span class="time">11:00</span>
            </div>

            <?php
                for ($x = 0; $x <= 10; $x++) {
            ?>

                <div class="chat hvr-glow" id="first">
                    <img class="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar"
                         style="width:100%;">
                    <h3 class="name">Nabil Rahman</h3>
                    <p class="chat-paragraph">Hello. How are you today?</p>
                    <span class="location">Boise</span>
                    <span class="time">11:00</span>
                </div>

            <?php
                }
            ?>


            <div class="chat hvr-glow" id="last">
            <img class="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <h3 class="name">Nabil Rahman</h3>
            <p class="chat-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <span class="location">Boise</span>
            <span class="time">11:00</span>

        </div>


    </div>


</div>

<div class="input" id="msg">

    <textarea placeholder="Type your message" id="message-text" class="materialize-textarea"></textarea>
    <a class="btn-floating waves-effect waves-light purple hvr-bounce-in" id="button-send"><i class="material-icons">send</i></a>

</div>



<div id="map">
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ZT3FLo6fZc1_xAI3asjebX3z16z9GnY&callback=initMap">
    </script>-->
    <iframe src="https://snazzymaps.com/embed/100419" width="100%" height="100%" style="border:none;"></iframe>
</div>


</div>


</body>

</html>