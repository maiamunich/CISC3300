<?php
// Set header to return JSON
header('Content-Type: application/json');

// Create an associative array
$data = array(
    "name" => "Charlie",
    "type" => "Cat",
    "age" => 3,
    "color" => "Orange",
    "isAdopted" => true
);

// Return JSON encoded array
echo json_encode($data);
?>
