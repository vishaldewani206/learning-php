<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'My Note';
$id = $_GET['id'];
$note = $db->query("select * from notes where id = :id", ['id'=>$id] )->fetch();


// dd($notes);

if(! $note){
    abort();
}

if($note['user_id'] !== 1){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";