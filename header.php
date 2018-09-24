<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<?php

    function loadHeader() {

        echo '<div class="header">';
        echo '<a href="app.php" class="logo hvr-grow">MapChat</a>';
        echo '<div class="container pullLeft">';
        echo '<a href="index.php">SIGNOUT</a>';
        echo '<a>PROFILE</a>';
        echo '<a href="about.php">ABOUT</a>';
        echo '</div>';
        echo '</div>';
    }

    loadHeader();
?>