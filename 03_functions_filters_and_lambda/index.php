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
            "releaseYear"=> 1968,
            "link"=> "https://example.com",
        ],
        [
            "name"=> "The Langoliers",
            "author"=> "Andy Weir",
            "releaseYear"=> 2021,
            "link"=> "https://example.com",
        ],
        [
            "name"=> "The Project Hail Mary",
            "author"=> "Andy Weir",
            "releaseYear"=> 2021,
            "link"=> "https://example.com",
        ],
        [
            "name"=> "The Martian",
            "author"=> "Andy Weir",
            "releaseYear"=> 2011,
            "link"=> "https://example.com",
        ]  
    ];
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
    <h1>Recommended Books</h1>
    <ul>
        
        <?php foreach ($filteredBooks as $book) :?>
                <li>
                    <a href="<?= $book['link'] ?>">
                        <?= $book['name'] ?> - <?= $book['author'] ?>
                    </a>
                </li>        
        <?php endforeach; ?>

    </ul>
</body>

</html>