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

        /*$(document).ready(function () {



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

        });*/

    </script>


</head>

<style>

</style>

<script>

    var scrollCount = 0;
    var hasScrolled = false;
    var message;
    $(document).ready(function() {
        ajax();
        $('#input-container-form').on('submit', function(e){
            //Stop the form from submitting itself to the server.
            e.preventDefault();
            message = $('.materialize-textarea').val();

            $.ajax({

                type: 'POST',
                data: { message : message },
                url: 'send.php',

                success: function() {
                    $('.materialize-textarea').val("");
                    $(".chat-list").animate({scrollTop: $(".chat-list").prop("scrollHeight")}, 1000);
                    console.log("PHP: " + message);

                }
            });
        });

        $(".materialize-textarea").keypress(function(event) {
            if (event.which == 13) {
                event.preventDefault();
                $("#input-container-form").submit();
            }
        });

    });



    function ajax()
    {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function ()
        {
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat-list').innerHTML = request.responseText;

                if(scrollCount < 2 && hasScrolled == false) {
                    $(".chat-list").animate({scrollTop: $(".chat-list").prop("scrollHeight")}, 1000);
                    scrollCount++;
                }
            }
        }
        request.open('POST', 'realtimeChatRefresh.php', true);
        request.send();
        //$(".chat-list").find(".chat:last").css("background-color", "red");

    }

    setInterval(function () {
        ajax();
    }, 1000);

    /*function ajaxSend()
    {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function ()
        {
            message-send = $("#textarea-send").val();

            if(request.readyState == 4 && request.status == 200)
            {
                $("#textarea-send").val("");
            }
        }
        request.open('POST', 'send.php', true);
        request.send();

    }*/







    /*$(document).ready(function() {

        var interval = 1000;  // 1000 = 1 second, 3000 = 3 seconds

        function runAjax() {
            $.ajax({
                type: 'GET',
                url: 'realtimeChatRefresh.php',
                data: $(this).serialize(),
                dataType: 'html',
                success: function (data) {
                    document.getElementById('chat-list').innerHTML = request.responseText;
                },
                complete: function (data) {
                    // Schedule the next
                    setTimeout(runAjax, interval);
                }
            });

        }

        setTimeout(runAjax, interval);
    }*/


    /*function callback(xmlhttp) {

        document.getElementById('chat-list').innerHTML = xmlhttp.responseText;
    }

    function ajax(url, callback){
        var xmlhttp;

        // compatible with IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                callback(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }



    ajax("realtimeChatRefresh.php", callback);*/

    /*$(document).ready(function(){
        sendRequest();
        function sendRequest(){
            $.ajax({
                url: "realtimeChatRefresh.php",
                success:
                    function(data){
                        $('#chat-list').html(data); //insert text of test.php into your div

                    },
                complete: function() {
                    // Schedule the next request when the current one's complete
                    setInterval(sendRequest, 5000); // The interval set to 5 seconds
                }
            });
        };
    });*/

</script>
<!--<body class="animated fadeIn" onload="ajax()">-->
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

    <div class="chat-list" id="chat-list">


        <?php

        /*include 'Chats.php';

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
        }*/
        ?>


    </div>


    <form class="input-container" method="post" id="input-container-form">

        <div class="input" id="msg">
            <textarea name="message" placeholder="Type your message"
                      class="materialize-textarea" id="textarea-send"></textarea>
            <!--<a href="#" onclick="myClick(0);">Open Info Window</a>-->
        </div>

        <div class="button-container">
            <button name ="send" class="btn-floating waves-effect waves-light purple hover-bounce-in" id="button-send" type="submit">
                <i class="material-icons">send</i>
            </button>
        </div>
    </form>



</div>

<?php
include 'footer.php';
?>

</body>
</html>