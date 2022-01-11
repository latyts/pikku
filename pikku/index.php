<?php
require_once __DIR__ . '/config/routes.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Charset -->
        <meta charset="utf-8" />
    </head>

    <body>
        <?php
            $router->resolve();
        ?>
    </body>
</html>
