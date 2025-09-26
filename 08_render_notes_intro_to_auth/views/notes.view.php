<?php require "partials/head.php" ?>
    
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

<div class="p-4">
    <?php foreach ($notes as $note) : ?>
        <li>
            <a class="text-blue-400 hover:underline" href="/note?id=<?= $note['id'] ?>">
                <?= $note['body'] ?>
            </a>
        </li>   
        
    <?php endforeach; ?>
</div>

<?php require "partials/footer.php" ?>