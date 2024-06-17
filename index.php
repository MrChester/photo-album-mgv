<?php
$photos = [
    1 => [
        "title" => "Man",
        "src" => "./assets/img/photo-01.jpeg",
        "slug" => "man"
    ],
    2 => [
        "title" => "Woman",
        "src" => "./assets/img/photo-02.jpeg",
        "slug" => "woman"
    ],
    3 => [
        "title" => "Fox",
        "src" => "./assets/img/photo-03.jpeg",
        "slug" => "Fox"
    ],
    4 => [
        "title" => "Cat",
        "src" => "./assets/img/photo-04.jpeg",
        "slug" => "cat"
    ],
    5 => [
        "title" => "Bird",
        "src" => "./assets/img/photo-05.jpeg",
        "slug" => "bird"
    ],
    6 => [
        "title" => "Forest",
        "src" => "./assets/img/photo-06.jpeg",
        "slug" => "forest"
    ],
    7 => [
        "title" => "Nature",
        "src" => "./assets/img/photo-07.jpeg",
        "slug" => "nature"
    ],
    8 => [
        "title" => "Digital",
        "src" => "./assets/img/photo-08.jpeg",
        "slug" => "digital"
    ],
    9 => [
        "title" => "Computer Science",
        "src" => "./assets/img/photo-09.jpeg",
        "slug" => "computer-science"
    ],
    10 => [
        "title" => "Car",
        "src" => "./assets/img/photo-10.jpeg",
        "slug" => "car"
    ],
    11 => [
        "title" => "Train",
        "src" => "./assets/img/photo-11.jpeg",
        "slug" => "train"
    ],
    12 => [
        "title" => "Space",
        "src" => "./assets/img/photo-12.jpeg",
        "slug" => "space"
    ],
]
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Album</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="./assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->
</head>

<body class="bg-success bg-opacity-10">
    <div class="wrapper">
        <header class="header bg-success bg-opacity-50">
            <div class="container">
                <nav class="header-nav navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">Photo Album</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#!">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="main py-3">
            <div class="container">
                <div class="gallery">
                    <?php foreach ($photos as $photo): ?>
                        <a href="./photos.php" class="text-dark">
                            <h1 class="h2 px-3 py-2"><?= $photo['title'] ?></h1>
                            <img class="w-full block rounded-b" src="<?= $photo['src'] ?>" alt="<?= $photo['slug'] ?>">
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </main>
        <footer class="footer bg-success bg-opacity-50">
            <div class="container">
                <div class="p-3 mb-2 text-center">
                    <a href="https://github.com/MrChester" class="footer-link text-dark" target="_blank">
                        &copy; Copyright RomDevLab
                        <?= date('Y') ?>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/fontawesome.all.min.js"></script>

</body>

</html>