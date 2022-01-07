<?php
require_once __DIR__ . '/config/env.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php
            $request = $_SERVER['REQUEST_URI'];
            switch ($request) {
                case '/' or '/posts':
                    require __DIR__ . '/views/posts/posts.php';
                    break;
            }
        ?>
    </body>
</html>
