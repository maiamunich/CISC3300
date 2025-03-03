<?php
require_once 'classes/Item.php';

use Store\Item;

// Create items
$shirt = new Item(1, "Cool T-Shirt", 19.99, "A very cool t-shirt with an awesome design");
$hat = new Item(2, "Baseball Cap", 24.99, "A stylish baseball cap");

// Get the URL parameter
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Basic routing
switch($url) {
    case 'shirt':
        echo $shirt->toJson();
        break;
    case 'hat':
        echo $hat->toJson();
        break;
    default:
        echo json_encode(['message' => 'Welcome to the store! Try /shirt or /hat']);
}
?> 