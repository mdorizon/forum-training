<?php

require_once __DIR__ . '/../data.php';

// get data form form
$name = $_GET['name'];
$content = $_GET['content'];

// Create new message
$message = [
  'name' => $name,
  'content' => $content,
  'notation' => '0'
];

// define path to file data.json
  $path = __DIR__ . '/../data.json';
// load data from json
  $messageListFile = file_get_contents($path);
// parse json to array
  $messageList = json_decode($messageListFile, true);
// add new message to array
  array_push($messageList, $message);
// convert array to string
  $messageListFile = json_encode($messageList);
// save data to json file
  file_put_contents($path, $messageListFile);

// Redirect to homepage
header('Location: /')
?>