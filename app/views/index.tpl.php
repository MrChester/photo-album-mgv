<?php require VIEWS . '/incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="gallery">
            <?php foreach ($photos as $photo): ?>
                <a href="photos.php" class="text-dark">
                    <h1 class="h2 px-3 py-2"><?= $photo['title'] ?></h1>
                    <img class="w-full block rounded-b" src="<?= $photo['src'] ?>" alt="<?= $photo['slug'] ?>">
                </a>
            <?php endforeach ?>
        </div>
    </div>
</main>
<?php require VIEWS . '/incs/footer.php' ?>