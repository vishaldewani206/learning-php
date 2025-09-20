<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
    $books = ["Do Androids Dream of Electrics Sheap", "The Langoliers", "Hail Mary"]
    ?>
    <h1>Recommended Books</h1>
    <ul>
        <!-- <?php foreach ($books as $book){ 
            echo "<li>$book</li>";
        }
        ?> -->
        
        <?php foreach ($books as $book) :?>
            <li><?= $book ?></li>
        
        <?php endforeach; ?>

    </ul>
</body>

</html>