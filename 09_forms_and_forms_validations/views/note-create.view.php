<?php require "partials/head.php" ?>
    
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

<div class="p-4">
    <h1 class="my-2 text-3xl font-bold">Create a note</h1>

    <form method="POST">
        <div class="flex flex-col my-4">
            <label for="body">Description</label>
            <textarea cols="40" rows="6" id="body" class="p-2 w-1/2" name="body"></textarea>

        </div>

        <p>
            <button type="submit" class="px-5 py-2 bg-blue-700 text-white">Create Note</button>
        </p>
    </form>
    
</div>

<?php require "partials/footer.php" ?>