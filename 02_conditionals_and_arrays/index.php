<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>

<style>
    body {
        display: grid;
        place-content: center;
        margin: 0;
        font-family: sans-serif;
        height: 100vh;
    }
</style>

<body>
    <?php
    $name =  "Dark Matter";
    $read = false;
    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have not read $name";
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>

</html>