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
    <h1>Recommended Books</h1>
    <ul>
        
        <?php foreach ($books as $book) :?>
            <li>
                <a href="<?= $book['link'] ?>">
                <?= $book['name'] ?>
                </a>
        </li>
        
        <?php endforeach; ?>

    </ul>
</body>

</html>