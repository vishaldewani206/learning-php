# Conditionals and Arrays

### Another way to `echo`

`echo` is so common that it has a shorthand:

```php
  <?= ... ?>
```

## Conditionals if else

if the value of read variable is true then it will run if block otherwise it will run else block

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

### foreach
he `foreach` loop is used to iterate over arrays. It takes each element of the array one by one and assigns it to a temporary variable.  
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

In PHP, their is another way to iterate over arrays
if you have many blocks use this syntax  

```php
<?php foreach ($books as $book) :?>
  <li><?php echo $book ?></li>     
<?php endforeach; ?>
```
