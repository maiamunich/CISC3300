<?php
require_once __DIR__ . '/Controllers/PostsController.php';

// Get the URL from the request
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Basic routing
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $url === 'posts') {
    header('Content-Type: application/json');
    $controller = new PostsController();
    echo $controller->index();
} else {
    echo "Welcome to the Posts API. Use /posts to get all posts.";
} 