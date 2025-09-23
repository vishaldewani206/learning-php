<?php

require "functions.php";

// require("router.php");

class Database {
    public $connection;

    public function __construct() {
        dd('hi there');

        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';

        $this->connection = new PDO($dsn, "root", "admin");
    }
    public function query($query)  {

        $statement = $this->connection->prepare($query);
        $statement->execute(); 

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();

$posts = $db->query("select * from posts where id > 1");

//connect to our mysql database



foreach ($posts as $post) {
    echo "<li>";
    echo $post['title'];
    echo "</li>";
}

