<?php
// Part 6.a - Create an associative array
$petInfo = [
    "name" => "Whiskers",
    "age" => 3,
    "color" => "Orange",
    "breed" => "Tabby"
];

// Part 6.b - Loop through array and echo
foreach ($petInfo as $key => $value) {
    echo "The pet's $key is $value<br>";
}

// Part 7.a - Create a function with specified requirements
function getPetDescription(string $name, int $age, string $extraInfo = null): string {
    $description = "This pet is named $name and is $age years old";
    
    if ($extraInfo !== null) {
        $description .= ". Additional info: $extraInfo";
    }
    
    return $description;
}

// Call the function with correct data types
echo "<br>" . getPetDescription("Whiskers", 3);
echo "<br>" . getPetDescription("Whiskers", 3, "Very friendly");
?>