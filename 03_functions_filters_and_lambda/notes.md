# Functions, Filters and Lambda Functions

### Adding Items to an Array
This syntax pushes `$book` into the `$filteredBooks` array.
```php
  $filteredBooks[] = $book;
```

## Functions
Functions let you group reusable code.
Example: filtering books by author.
```php
<?php
  function filterByAuthor($books, $author){
    $filteredBooks =[];
    foreach($books as $book){
        if($book['author'] === $author){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
  };
  ?>
```

Using the Function:
Here, we only display books by Andy Weir:
```php
<?php foreach (filterByAuthor($books, "Andy Weir") as $book) :?>
  <li>
      <a href="<?= $book['link'] ?>">
          <?= $book['name'] ?> - <?= $book['author'] ?>
      </a>
  </li>        
<?php endforeach; ?>

```

### Lambda Functions
A lambda function (also called an anonymous function) is a function without a name.
It’s often used as a callback inside another function.
```php
<?php
  function filter($items, $fn){
      $filteredItems =[];
      foreach($items as $item){
          if($fn($item)){
              $filteredItems[] = $item;
          }
      }
      return $filteredItems;
  };
  $filteredBooks = filter($books, function ($book){
      return $book['releaseYear'] > 2000;
  });
 ?>

```

### `array_filter` in PHP
`array_filter` is a built-in PHP function that filters an array using a callback function.
It automatically loops through the array and keeps only the items that return true.
it works exactly same as the function we created above
```php
<?php
  $filteredBooks = array_filter($books, function ($book){
      return $book['releaseYear'] > 2000;
  });
 ?>

```