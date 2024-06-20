<?php require VIEWS . '/incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="gallery">
            <?php foreach ($photos as $photo): ?>
                <?php if ($photo['category_id'] === (int) $_GET['category_id']): ?>
                    <a href="photo?photo_id=<?= $photo['id'] ?>" class="text-dark">
                        <h1 class="h2 px-3 py-2"><?= $photo['name'] ?></h1>
                        <img class="w-full block rounded-b" src="<?= $photo['link'] ?>" alt="<?= $photo['slug'] ?>">
                        <div class="gallery-item-info">
                            <ul>
                                <li class="gallery-item-likes">
                                    <span class="visually-hidden">Likes:</span>
                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                    89
                                </li>
                                <li class="gallery-item-dislikes">
                                    <span class="visually-hidden">Dislikes:</span>
                                    <i class="fas fa-thumbs-down" aria-hidden="true"></i>
                                    11
                                </li>
                                <li class="gallery-item-comments">
                                    <span class="visually-hidden">Comments:</span>
                                    <i class="fas fa-comment" aria-hidden="true"></i>
                                    5
                                </li>
                            </ul>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php require VIEWS . '/incs/footer.php' ?>