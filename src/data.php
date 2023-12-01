<?php
    // load data from json
    $path = __DIR__ . '/data.json';
    $messageListFile = file_get_contents($path);
    $messageList = json_decode($messageListFile, true);
?>