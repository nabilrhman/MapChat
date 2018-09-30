<?php

include 'Chats.php';

$chatId = $GLOBALS['last-chat-id'];
//echo "<script type='text/javascript'>alert('$chatIs');</script>";

if (!empty($chatId)) {

    $results = Chat::getAfter($GLOBALS['last-chat-id']);
    //echo "<script type='text/javascript'>alert('Global is set');</script>";

}
else {
    $results = Chat::getAll();
}

if(!is_null($results)) {

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
        $GLOBALS['last-chat-id'] = $chat['chat_id'];
        echo '<span class="time">' . $GLOBALS['last-chat-id'] . '</span>';
        echo '</div>';
        echo '</div>';
    }
}

//echo "<script type='text/javascript'>alert('$chatId');</script>";
?>