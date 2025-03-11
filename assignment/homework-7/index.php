<?php
require_once 'controllers/NoteController.php';

$controller = new NoteController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->createNote($_POST);
} else {
    $controller->showForm();
}
?> 
