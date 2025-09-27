# Render Notes and intro to Authorization
First, create a new MySQL database for storing notes.
### Getting notes from database
In `notes.php`, we fetch all notes that belong to user_id = 1:

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
Inside the `note.view.php` file, loop through and display the notes:
```php

 <?php foreach ($notes as $note) : ?>
        <p>
            <?= $note['body'] ?>
        </p>       
    <?php endforeach; ?>

```


### Simplifying Status Codes
Instead of remembering status codes, define constants in `Response.php`:
`Response.php`
```php
<?php

class Response {
    const NOT_FOUND = 404;
    const FORBIDDEN = 403;
}
```

## Intro to Authroization
Currently, if you change the URL, you can access other users’ notes.
To prevent this, add authorization checks in `note.php`.
- First check → If the note does not exist, return a 404 page.
- Second check → If the note exists but belongs to another user, return a 403 page.
```php
if(! $note){
    abort();
}

if($note['user_id'] !== 1){
    abort(Response::FORBIDDEN);
}
```
Create a new file `403.php` inside the views folder for handling unauthorized access