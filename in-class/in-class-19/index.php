<?php
// Load environment variables from .env file
$env = parse_ini_file('.env');

// Check if we're accessing /posts
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, '/posts') === false) {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found']);
    exit;
}

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
    echo json_encode(['error' => 'Database Error']);
}
?> 