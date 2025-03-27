<?php
// Debug information
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Current directory: " . __DIR__ . "<br>";
echo "Looking for .env at: " . __DIR__ . '/.env' . "<br>";

if (file_exists(__DIR__ . '/.env')) {
    echo ".env file found!<br>";
} else {
    echo ".env file NOT found!<br>";
}

// Load environment variables from .env file
$env = parse_ini_file(__DIR__ . '/.env');

// Debug the request URI
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";

// Simplified URL check
if ($_SERVER['REQUEST_URI'] === '/in-class-19/posts' || 
    $_SERVER['REQUEST_URI'] === '/in-class-19/index.php') {
    try {
        // Connect to database using .env variables
        $pdo = new PDO(
            "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
            $env['DB_USER'],
            $env['DB_PASS']
        );
        
        // Set PDO to throw exceptions on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Query posts table
        $stmt = $pdo->query('SELECT * FROM posts');
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Set JSON content type header
        header('Content-Type: application/json');
        
        // Output posts as JSON
        echo json_encode($posts);

    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Database Error: ' . $e->getMessage()]);
    }
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found', 'uri' => $_SERVER['REQUEST_URI']]);
}
?> 