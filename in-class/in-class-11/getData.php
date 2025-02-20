<?php

// Set headers for JSON and CORS
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

//get uri pieces
$uriArray = explode("/", $uri);
//var_dump($uriArray);

// Your cats data
$cats = [
    [
        'name' => 'Charlie',
        'adoptionStatus' => 'available'
    ],
    [
        'name' => 'Lily',
        'adoptionStatus' => 'not-available'
    ],
    // ... you can add more cats from your previous array
];

// Check if the request is for cats data
if ($uriArray[1] === 'cats' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($cats);
    exit();
}

if ($uriArray[1] === 'form' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode([
        'message' => 'Success'
    ]);
    exit();
}


?>
