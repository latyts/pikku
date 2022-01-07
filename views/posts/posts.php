<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../controllers/posts_controller.php';

$controller = new PostsController($conn);
$posts = $controller->getPosts();
?>
