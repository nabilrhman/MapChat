<?php

include 'Chats.php';

$results = Chat::getLast();


foreach ($results as $chat) {

    echo '<div class="chat hover-glow animated fadeIn">';
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