<?php

include 'Chats.php';




$results = Chat::getAll();
generateIndex($results);


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


/*if(isset($_SESSION['chat_id']) && !empty($_SESSION['chat_id']))
{
    //$results = Chat::getAfter($_SESSION['chat_id']);
    //generateIndex($results);
    $results = Chat::getAll();
    generateIndex($results);

    $message = $_SESSION['chat_id'];
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else
    {
    $results = Chat::getAll();
    generateIndex($results);
    echo "<script type='text/javascript'>alert('$results');</script>";
}*/

//echo "<script type='text/javascript'>alert('$chatId');</script>";
?>