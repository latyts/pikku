<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../controllers/posts_controller.php';

$controller = new PostsController($conn);
$posts = $controller->getPosts();
?>

<ul>
    <?php foreach($posts as $post) { ?>
    <li>
        <?php echo($post['title']) ?>
        <p><?php echo($post['contents']) ?></p>
    </li>
    <?php } ?>
</ul>
