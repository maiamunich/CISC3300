<?php
class NoteController {
    public function showForm() {
        require 'views/note_form.php';
    }

    public function createNote($post) {
        $title = trim($post['title'] ?? '');
        $description = trim($post['description'] ?? '');
        
        // Validation
        if (strlen($title) <= 3) {
            $error = "Title must be more than 3 characters long";
        }
        elseif (strlen($description) <= 10) {
            $error = "Description must be more than 10 characters long";
        }
        
        if (isset($error)) {
            // If there's an error, show the form again
            require 'views/note_form.php';
        } else {
            // Convert special characters
            $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
            $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
            $success = "Note created successfully!";
            require 'views/note_form.php';
        }
    }
}
?> 