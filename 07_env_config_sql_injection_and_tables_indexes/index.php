<?php

require "functions.php";
require "Database.php";
$config = require("config.php");
// require("router.php");

$db = new Database($config['database']);

$posts = $db->query("select * from posts");


foreach ($posts as $post) {
    echo "<li>";
    echo $post['title'];
    echo "</li>";
}
