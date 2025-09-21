# Separating Logic and Page Links

### Creating spearate files for HTML and PHP
Make `index.view.php` where all the HTML will be stored.
Make `index.php` where all the PHP will be stored.
in `index.php` you can remove the ending tag `?>` because it is all PHP.
import `index.view.php` at the end of `index.php`
```php
  require "index.view.php";
```

### Page Links
in anchor tag use `/about.php` instead of `/about`



## Partials
partials are chunks of HTML which keep repeating so you make another file for it.
make a new folder called `views` which will store all the views files (`index.view.php`).
make new folder inside `views` called `partials`
create new file inside it `nav.php` and add the navbar code.
use require to use the partial
```php
<?php require "partials/nav.php" ?>

```
you can do same for head and footer
head.php:
```html
<!DOCTYPE html>
<html lang="en" class="w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</head>

<body class="w-full h-full">
```
footer.php:
```html
</body>
</html>
```
this is how `index.view.php` looks like now:
```php
<?php require "partials/head.php" ?>
    
<?php require "partials/nav.php" ?>

<main class="bg-gray-300 w-full h-full">
    <div class="bg-white p-4 w-full ">
        <h1 class="text-4xl">Dashboard</h1>
    </div>

</main>

<?php require "partials/footer.php" ?>
```



### Make partials more dynamic
`banner.php`:
this is static and we want different name on each page
```php
<div class="bg-white p-4 w-full ">
    <h1 class="text-4xl">Home</h1>
</div>

```
so we can make a variable called `$heading` in `index.php` and `about.php`
```php
<?php 
$heading = "About";
require "views/about.view.php";
```
use this varaible in `banner.php`:
```php
<div class="bg-white p-4 w-full ">
    <h1 class="text-4xl"><?= $heading ?></h1>
</div>
```