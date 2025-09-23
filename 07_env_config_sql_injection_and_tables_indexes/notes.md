# MySQL, PDO and PHP Database Classes

## MySQL
first create database and connection in tablePlus.

### Classes 101
A class is a blueprint for creating objects with properties (variables) and methods (functions).
```php
class Person {
    public $name;
    public $age;

    public function breathe(){
        echo $this->name . " is breathing" ;
    }
}

$person = new Person();

$person ->name = 'John Doe';
$person ->age = 25;

$person->breathe();
```
- Properties: $name, $age
- Method: breathe()
- Object Creation: $person = new Person();


### connecting to MySQL (PDO)
PDO (PHP Data Objects) provides a safe and consistent way to interact with databases.
```php
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$pdo = new PDO($dsn, "root", "admin");
```
- *$dsn*: Data Source Name (driver, host, port, dbname, charset)
- *"root"* : MySQL username
- *"admin"*: MySQL password

```php
$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute(); 

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
```
- `prepare()`: Prepares SQL query (safe against SQL injection)
- `execute()`: Runs the prepared statement
- `fetchAll(PDO::FETCH_ASSOC)`: Returns results as an array of associative arrays

*displaying data*
```php
dd($posts);
foreach ($posts as $post) {
    echo "<li>";
    echo $post['title'];
    echo "</li>";
}
```

### PHP Database Classes
converted database connection to classes
`__construct()`
- Automatically runs when the class is instantiated.
- Creates a PDO connection to the MySQL database.
```php
class Database {
    public $connection;

    public function __construct() {
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';

        $this->connection = new PDO($dsn, "root", "admin");
    }

    public function query($query)  {

        $statement = $this->connection->prepare($query);
        $statement->execute(); 

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();

$posts = $db->query("select * from posts");
```