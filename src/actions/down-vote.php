<?php

require_once __DIR__ . '/../data.php';

// define path to file data.json
  $path = __DIR__ . '/../data.json';
// load data from json
  $messageListFile = file_get_contents($path);
// parse json to array
  $messageList = json_decode($messageListFile, true);
// récupérer le message
  $message = $messageList[$_GET['index']];
// incrémenter la notation
  $message['notation']--;
// Pousser la nouvelle notation
  array_push($messageList, $message);
// supprimer l'ancien message
  unset($messageList[$_GET['index']]);
// fonction de tri des messages
function compareMessages($a, $b) {
  return $b['notation'] - $a['notation'];
}
usort($messageList, 'compareMessages');
// convert array to string
  $messageListFile = json_encode($messageList);
// save data to json file
  file_put_contents($path, $messageListFile);

// Redirect to homepage
header('Location: /')
?>