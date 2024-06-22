<?php require VIEWS . '/incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="gallery">
            <?php foreach ($categories as $category): ?>
                <a href="photos?category_id=<?= $category['id'] ?>&name=<?= h($category['name']) ?>" class="text-dark">
                    <h1 class="h2 px-3 py-2"><?= h($category['name']) ?></h1>
                    <img class="w-full block rounded-b" src="<?= h($category['link']) ?>" alt="<?= $category['slug'] ?>">
                </a>
            <?php endforeach ?>
        </div>
    </div>
</main>
<?php require VIEWS . '/incs/footer.php' ?>