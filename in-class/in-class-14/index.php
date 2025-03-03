<?php
require_once 'classes/Item.php';

use Store\Item;

// Create a new item
$item = new Item(1, "Cool T-Shirt", 19.99, "A very cool t-shirt with an awesome design");

// Echo the JSON output
echo $item->toJson();
?> 