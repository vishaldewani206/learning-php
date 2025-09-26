<?php

require "functions.php";
require "Database.php";
$config = require("config.php");
// require("router.php");

$db = new Database($config['database']);

$id = $_GET['id'];
dd($id);
$query = "select * from posts where id = :id";
$posts = $db->query($query, [':id' => $id]) -> fetch();

echo "<li>{$posts['title']}</li>";

// foreach ($posts as $post) {
//     echo "<li>";
//     echo $post['title'];
//     echo "</li>";
// }
