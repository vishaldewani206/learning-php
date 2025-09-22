# Superglobals, current page stylings and PHP router

## Current Page Stylings
Superglobals like `$_SERVER` store information about the current request (URL, headers, method, etc.).
To inspect them easily, create a simple helper function:
```php
  function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
};

dd($_SERVER);
```
- dd($_SERVER); will dump all request-related data.
- This helps you understand what PHP is returning at any point.

### Current Page stylings
To highlight the active link in your navigation, you can compare the current URI with the link’s path.
`nav.php`
```php
<a href="/" class="<?php echo ($_SERVER['REQUEST_URI'] === "/") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">Home</a>
```


### More Convenient Approach (`functions.php`)
Instead of writing the condition everywhere, use a helper function:
```php
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}
```
Now your nav link looks cleaner:
```php
<a href="/" class="<?php echo urlIs("/") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">Home</a>
```
- Require `functions.php` at the top of your `index.php` and `about.php` so it’s available everywhere.



## PHP router
Instead of including files manually for each page, create a `router.php` to handle routes.
```php
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php'
];

function routeToControllers($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}
routeToControllers($uri, $routes);
```
- `array_key_exists($uri, $routes)` → checks if the requested URI exists in the `$routes` array.

- If found → loads the correct controller file.

- If not → calls the `abort()` function.

### Abort function
Handles errors by returning the proper HTTP status code and showing an error page.
```php
function abort($code = 404) {
    http_response_code(404);
    require "views/{$code}.php";
    die();
}
```
- `http_response_code($code)` → sends correct status (e.g., 404, 500).
- Includes a matching view file like `views/404.php`.
- Stops execution with `die()`.
