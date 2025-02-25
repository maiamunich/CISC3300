<?php
header('Content-Type: application/json');

// Get POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Create response
$response = array(
    'status' => 'success',
    'message' => "Thank you $name! Your message has been received. We'll contact you at $email soon."
);

// Send JSON response
echo json_encode($response);
?>