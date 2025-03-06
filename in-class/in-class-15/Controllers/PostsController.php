<?php
require_once dirname(__DIR__) . '/Models/Post.php';

class PostsController {
    public function index() {
        $postModel = new Post();
        return json_encode($postModel->getPosts());
    }
}
?> 