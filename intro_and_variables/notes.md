# Getting Started With PHP

### Tool You need on your machine

- PHP (the language itself)
- IDE / Code Editor (e.g., VS Code, PhpStorm)
- MySQL (for database work)
- TablePlus (or any DB management tool)

### Starting a Project

1. create `index.html` and add boiler code

```bash
php -S localhost:8888
```

2. This will start a local server and serve your files.

3. rename the `index.html` to `index.php`

👉 You can still write HTML inside a .php file.

## First taste of PHP

To run PHP code inside an HTML file, wrap it in:

```php
<?php ... ?>
```

### The `echo` statement

this will show hello world on the page:

```php
<?php echo "Hello World"; ?>
```

In PHP, the dot (.) is used to concatenate strings:

```php
<?php echo "Two " . "Strings"; ?>
```

### Variables

- Variables start with a $ sign.

- Use double quotes if you want variables to be interpolated inside strings.

Example 1: Concatenation

```php
<?php
  $greeting =  "Hello";
  echo $greeting . " World";
  ?>
```

Example 2: String Interpolation

```php
<?php
  $greeting =  "Hello";
  echo "$greeting  World";
  ?>
```

⚠️ If you use **single quotes ( ' )**, the variable name will not be replaced with its value. It will be treated as a plain string.
