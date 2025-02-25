<?php
header('Content-Type: application/json');

// Sample business data - you can modify this
$items = array(
    array(
        "name" => "Artisan Coffee",
        "price" => 4.99
    ),
    array(
        "name" => "Fresh Croissant",
        "price" => 3.50
    ),
    array(
        "name" => "Iced Latte",
        "price" => 5.99
    ),
    array(
        "name" => "Blueberry Muffin",
        "price" => 2.99
    ),
    array(
        "name" => "Chocolate Croissant",
        "price" => 3.50
    ),
    array(
        "name" => "Vanilla Latte",
        "price" => 4.99
    )
);

echo json_encode($items);
?>
