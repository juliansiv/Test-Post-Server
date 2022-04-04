<?php

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data)) {
  header('Content-Type: application/json');
  echo json_encode($data, JSON_PRETTY_PRINT);
  error_log(print_r($data, true));
} else {
  echo "Empty";
}
