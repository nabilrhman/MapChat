<?php

include 'Chats.php';
session_start();


if (isset($_SESSION['chat_id'])) {
    $results = Chat::getAfter(1861);
}


function generateIndex($results)
{

    GLOBAL $chatId;
    if (!is_null($results)) {


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
            echo '<span class="time">' . $chat['chat_id'] . '</span>';
            $chatId = $chat['chat_id'];

            echo '</div>';
            echo '</div>';
        }
        $_SESSION['chat_id'] = $chatId;
    }


}

?>