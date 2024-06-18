<?php require 'incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="gallery">
            <?php foreach ($photos as $photo): ?>
                <a href="./photo.php" class="text-dark">
                    <img class="w-full block rounded-b" src="<?= $photo['src'] ?>" alt="<?= $photo['slug'] ?>">
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
            <?php endforeach ?>
        </div>
    </div>
</main>
<?php require 'incs/footer.php' ?>