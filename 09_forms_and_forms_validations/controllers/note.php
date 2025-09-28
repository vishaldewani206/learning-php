<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'My Note';
$id = $_GET['id'];
$query = "select * from notes where id = :id";
$note = $db->query($query, ['id'=>$id] )->findOrFail();

$currentUserId = 1;
authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";