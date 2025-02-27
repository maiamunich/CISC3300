<?php
require_once 'config.php';

header('Content-Type: application/json');

// Sample business data - you can modify this
$items = array(
    array(
        "name" => "EXPLOSION",
        "color" => "red"
    ),
    array(
        "name" => "Baby",
        "color" => "baby pink"
    ),
    array(
        "name" => "Ocean Glass",
        "color" => "sea green"
    ),
    array(
        "name" => "Blueberry",
        "color" => "blue-purple hue"
    ),
    array(
        "name" => "Chocolate",
        "color" => "dark brown"
    ),
    array(
        "name" => "Vanilla Swirl",
        "color" => "white & black"
    )
);

echo json_encode($items);
?>
