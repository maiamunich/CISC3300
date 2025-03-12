<?php
class NoteController {
    public function showForm() {
        $html = file_get_contents('views/note_form.html');
        $html = str_replace('[ERROR_MESSAGE]', '', $html);
        $html = str_replace('[SUCCESS_MESSAGE]', '', $html);
        $html = str_replace('[TITLE_VALUE]', '', $html);
        $html = str_replace('[DESCRIPTION_VALUE]', '', $html);
        echo $html;
    }

    public function createNote($post) {
        $title = trim($post['title'] ?? '');
        $description = trim($post['description'] ?? '');
        
        $html = file_get_contents('views/note_form.html');
        
        // Validation
        if (strlen($title) <= 3) {
            $error = '<div class="error">Title must be more than 3 characters long</div>';
            $html = str_replace('[ERROR_MESSAGE]', $error, $html);
            $html = str_replace('[SUCCESS_MESSAGE]', '', $html);
        }
        elseif (strlen($description) <= 10) {
            $error = '<div class="error">Description must be more than 10 characters long</div>';
            $html = str_replace('[ERROR_MESSAGE]', $error, $html);
            $html = str_replace('[SUCCESS_MESSAGE]', '', $html);
        }
        else {
            // Convert special characters
            $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
            $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
            $html = str_replace('[ERROR_MESSAGE]', '', $html);
            $html = str_replace('[SUCCESS_MESSAGE]', '<div class="success">Note created successfully!</div>', $html);
        }
        
        // Replace form values
        $html = str_replace('[TITLE_VALUE]', htmlspecialchars($title), $html);
        $html = str_replace('[DESCRIPTION_VALUE]', htmlspecialchars($description), $html);
        
        echo $html;
    }
}
?> 