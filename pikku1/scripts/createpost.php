#!/usr/bin/env php
<?php
require __DIR__ . '/../config/db.php';

define("SCRIPT_NAME", $argv[0]);

if ($argc < 3 or $argc > 3) {
    echo("usage: " . SCRIPT_NAME . " [POST_NAME] [POST_CONTENT]\n");
    die();
}

define("POST_NAME", $argv[1]);
define("POST_CONTENT", $argv[2]);

$sql = 'INSERT INTO posts(title, contents) VALUES (:title, :contents)';
$sth = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(
    'title' => POST_NAME,
    'contents' => POST_CONTENT,
));
echo('Created post.');
?>
