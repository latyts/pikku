<?php
define("HOST_VARIABLE", "PIKKU_DB_HOST");
define("PORT_VARIABLE", "PIKKU_DB_PORT");
define("USER_VARIABLE", "PIKKU_DB_USER");
define("DBNAME_VARIABLE", "PIKKU_DB_NAME");
define("PSWD_VARIABLE", "PIKKU_DB_PASSWORD");

define("DEFAULTS", [
    HOST_VARIABLE       => 'localhost',
    PORT_VARIABLE       => '5432',
    USER_VARIABLE       => 'pikku',
    DBNAME_VARIABLE     => 'pikku',
    PSWD_VARIABLE       => '',
]);

$config = [];
foreach (DEFAULTS as $var => $default) {
    $config[$var] = getenv($var) ?: $default;
}
?>
