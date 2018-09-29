<?php

include 'Chats.php';

$results = Chat::getAll();
foreach ($results as $chat) {
    print $chat["user_id"] . "-" . $chat["body"] . "-" . $chat["first_name"] ."<br/>";
}