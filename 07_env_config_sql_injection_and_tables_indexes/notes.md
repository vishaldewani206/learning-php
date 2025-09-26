# Environments Configuration, SQL injection vulnerabilities and database index and tables 

### Environment configuration
`config.php` this will hold all the configurations

```php
<?php

return [
       'database' => [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
       ]
    ];
```

`Database.php`
we have created `Database.php` more dynamic.
`http_build_query` makes query from given array but it add (&) for each value so we can changed it to semi-colon
```php
$dsn = "mysql:" . http_build_query($config, '', ';');
```
outpout
```php
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4"
```
`index.php`
here we are sending `Database.php` configs.
```php
$db = new Database($config['database']);
```

### SQL injection vulnerabilities
`index.php`
**NEVER EVER inline user data in query string**
```php
$id = $_GET['id'];
dd($id);
$query = "select * from posts where id = $id";
$posts = $db->query($query) -> fetch();

echo "<li>{$posts['title']}</li>";
```
- Attackers can inject malicious SQL (?id=1 OR 1=1).

**RIGHT WAY**
```php
$id = $_GET['id'];
dd($id);
$query = "select * from posts where id = :id";
$posts = $db->query($query, [':id' => $id]) -> fetch();

echo "<li>{$posts['title']}</li>";
```
`Database.php`
we are accepting `$params`
```php
 public function query($query, $params)  {

        $statement = $this->connection->prepare($query);
        $statement->execute($params); 

        return $statement;
    }
```
