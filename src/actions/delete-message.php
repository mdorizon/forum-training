<?php

require_once __DIR__ . '/../data.php';

// define path to file data.json
  $path = __DIR__ . '/../data.json';
// load data from json
  $messageListFile = file_get_contents($path);
// parse json to array
  $messageList = json_decode($messageListFile, true);
// remove message to array
  unset($messageList[$_GET['index']]);
// convert array to string
  $messageListFile = json_encode($messageList);
// save data to json file
  file_put_contents($path, $messageListFile);

// Redirect to homepage
header('Location: /')
?>