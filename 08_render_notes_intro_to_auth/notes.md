# Render Notes and intro to Authorization
first create new database in mySQL.
### Getting notes from database
In `notes.php`
this will select all the notes with user_id = 1

```php
<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'My Notes';
$notes = $db->query("select * from notes where user_id = 1;")->fetchAll();

// dd($notes);

require "views/notes.view.php";
```

### Rendering the notes
```php

 <?php foreach ($notes as $note) : ?>
        <p>
            <?= $note['body'] ?>
        </p>       
    <?php endforeach; ?>

```
