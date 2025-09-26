<?php require "partials/head.php" ?>
    
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

<div class="p-4">
    <?php foreach ($notes as $note) : ?>
        <p>
            <?= $note['body'] ?>
        </p>       
    <?php endforeach; ?>
    <p>
        <a class="text-blue-400" href="/notes">Go back...</a>
    </p>
</div>

<?php require "partials/footer.php" ?>