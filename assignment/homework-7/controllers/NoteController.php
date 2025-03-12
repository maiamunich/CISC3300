<?php
class NoteController {
    public function handleRequest() {
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
            return;
        }

        $data = json_decode(file_get_contents('php://input'), true);
        $title = trim($data['title'] ?? '');
        $description = trim($data['description'] ?? '');
        
        // Validation
        if (strlen($title) <= 3) {
            echo json_encode(['error' => 'Title must be more than 3 characters long']);
            return;
        }
        
        if (strlen($description) <= 10) {
            echo json_encode(['error' => 'Description must be more than 10 characters long']);
            return;
        }

        // Convert special characters
        $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        
        echo json_encode(['message' => 'Note created successfully']);
    }
}
?> 