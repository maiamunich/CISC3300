<?php

try {
    $age = -5;
    
    if ($age < 0) {
        throw new Exception("Age cannot be negative!");
    }
    
    echo "Your age is: " . $age;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?> 