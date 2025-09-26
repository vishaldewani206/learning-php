<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'My Note';
$id = $_GET['id'];
$notes = $db->query("select * from notes where id = :id", ['id'=>$id] )->fetchAll();


// dd($notes);


require "views/note.view.php";