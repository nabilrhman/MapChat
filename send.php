<?php
        if (isset($_POST['message'])) {
            include 'Chats.php';

            echo '<script>console.log("PHP: "' . mysqli_real_escape_string($_POST['message']) . '</script>;';
            Chat::send(addslashes(trim($_POST['message'])));
        }
    ?>