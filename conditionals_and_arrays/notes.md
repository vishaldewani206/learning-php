# Conditionals and Arrays

### `echo` shorthand

In PHP, `echo` is commonly used to output values.
There’s also a shorthand syntax:

```php
  <?= ... ?>
```

## Conditionals: `if` / `else`

Conditional statements let you run code depending on whether an expression is `true` or `false`.

```php
<?php
  $name =  "Dark Matter";
  $read = false;
  if ($read) {
      $message = "You have read $name";
  } else {
      $message = "You have not read $name";
  }
  ?>
```

## Arrays
Arrays allow you to store multiple values in a single variable.
### foreach
The `foreach` loop iterates over each item in an array:
```php
<?php
  $books = ["Do Androids Dream of Electrics Sheap", "The Langoliers", "Hail Mary"]
  ?>
<h1>Recommended Books</h1>
<ul>
  <?php foreach ($books as $book){
      echo "<li>$book</li>";
  }
  ?>
</ul>
```

### Alternative `foreach` Syntax

Useful when mixing PHP with lots of HTML:

```php
<?php foreach ($books as $book) :?>
  <li><?php echo $book ?></li>     
<?php endforeach; ?>
```

### Associative Arrays
Associative arrays use keys (like objects in JavaScript).
```php
<?php
$books = [
    [
        "name"=> "Do Androids Dream of Electrics Sheap",
        "author"=> "Philip k. Dick",
        "link"=> "https://example.com",
    ],
    [
        "name"=> "The Langoliers",
        "author"=> "Andy Weir",
        "link"=> "https://example.com",
    ] 
]
?>
```
Displaying the array:
```php

<ul> 
  <?php foreach ($books as $book) :?>
      <li>
        <a href="<?= $book['link'] ?>">
          <?= $book['name'] ?>
        </a>
  </li>
  <?php endforeach; ?>
</ul>
```
