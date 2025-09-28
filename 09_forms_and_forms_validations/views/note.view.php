<?php require "partials/head.php" ?>
    
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

<div class="p-4">
        <p>
            <?= $note['body'] ?>
        </p>       
    <p>
        <a class="text-blue-400" href="/notes">Go back...</a>
    </p>
</div>

<?php require "partials/footer.php" ?>