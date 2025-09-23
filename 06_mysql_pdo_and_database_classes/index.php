<?php

require "functions.php";

// require("router.php");

//connect to our mysql database
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$pdo = new PDO($dsn, "root", "admin");

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute(); 

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

foreach ($posts as $post) {
    echo "<li>";
    echo $post['title'];
    echo "</li>";
}