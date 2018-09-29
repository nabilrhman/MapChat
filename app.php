<!DOCTYPE html>
<html lang="en">
<head>

    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type='text/javascript' src='js/map.js'></script>

    <!-- Compiled and minified CSS -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Resize-->
    <script src="js/ResizeSensor.js"></script>
    <script src="js/ElementQueries.js"></script>


    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>MapChat</title>

    <script>

        $(document).ready(function () {



            // Auto scroll
            var scrolled = false;

            function updateScroll() {
                if (!scrolled) {
                    $(".chat-list").animate({scrollTop: $(".chat-list").prop("scrollHeight")}, 1000);
                }

                $(".chat-list").on('scroll', function () {
                    scrolled = true;
                });
            }

            updateScroll();


            var input_message_element = document.getElementById('msg');

            new ResizeSensor(input_message_element, function () {


                $(".chat-list").animate({scrollTop: $(".chat-list").prop("scrollHeight")}, 1000);
                $(".input").animate({scrollTop: $(".input").prop("scrollHeight")}, 1000);


            });

        });

    </script>


</head>

<style>

</style>

<script>
</script>
<body class="animated fadeIn">

<?php
include 'header.php';
?>

<div id="map">
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQCJ5dE-f708k-2Acw_xxzfRliL9mamxM&callback=initialize">
    </script>
    <!--<iframe src="https://snazzymaps.com/embed/100419" width="100%" height="100%" style="border:none;"></iframe>-->
</div>

<div class="chat-container">

    <div class="chat-list">


        <?php

        include 'Chats.php';

        $results = Chat::getAll();
        foreach ($results as $chat) {

            echo '<div class="chat hover-glow">';
            echo '<div class="chat-avatar-container">';
            echo '<img class="avatar" src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar"';
            echo 'style="width:100%;">';
            echo '</div>';
            echo '<div class="chat-body-container">';
            echo '<h3 class="name">' . $chat["first_name"] . ' ' . $chat["last_name"] . '</h3>';
            echo '<p class="chat-body">' . $chat["body"] . '</p>';
            echo '<span class="location">Boise</span>';
            echo '<span class="time">11:00</span>';
            echo '</div>';
            echo '</div>';
        }
        ?>




    </div>


    <div class="input-container">
        <div class="input" id="msg">
            <textarea placeholder="Type your message" id="message-text" class="materialize-textarea"></textarea>
            <!--<a href="#" onclick="myClick(0);">Open Info Window</a>-->
        </div>

        <div class="button-container">
            <a class="btn-floating waves-effect waves-light purple hover-bounce-in" id="button-send"
               onclick="myClick(0);"><i class="material-icons">send</i></a>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>

</body>
</html>