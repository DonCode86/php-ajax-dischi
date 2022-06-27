<?php
  require_once __DIR__ . '/database.php';
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  $response = $database;
  echo json_encode($response);
?>