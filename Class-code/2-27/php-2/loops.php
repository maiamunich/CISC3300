<?php


////while
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
//
//
////do while
$i = 1;
do {
    echo $i;
    $i++;
} while ($i < 6);
//
//
////for
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
//
//
////foreach
$colors = array("red", "green", "blue", "yellow");
////
foreach ($colors as $x) {
    echo "$x <br>";
}
//
//
////array_map
function myFunction($v) {
    return($v*$v);
}

function isEven($number) {
    return $number % 2;
}
//
$a = [1,2,3,4,5];
$mapped = array_map("myFunction",$a);
var_dump($mapped);
$filtered = array_filter($a, "isEven");
var_dump($filtered);
////keys and values
$products = [
    'Toffee' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.99,
];

//key => value
foreach ($products as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

