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
        <main class="main">
            <div class="container">
                <!--Large Screen Size Post Side-->
                <section id="post-side" class="border p-0 my-4 bg-white">
                    <article class="bg-white">
                        <div id="post-top-bar" class="p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img id="post-profile-story"
                                    src="./assets/img/avatar-1.jpg"
                                    alt="">
                                <label class="d-inline ps-2" for=""><span id="post-nick">williamanderson7</span></label>
                            </div>
                            <div>
                                <i id="dots" aria-label="More options" class="fas fa-ellipsis-h"></i>
                            </div>
                        </div>
                        <div>
                            <img class="w-100" id="post"
                                src="./assets/img/photo-07.jpeg"
                                alt="">
                        </div>
                        <div id="bottom-bar">
                            <div class="mt-3">
                                <ul class="buttons-list d-flex justify-content-start align-items-end">
                                    <li id="buttons" class="buttons">
                                        <i class="far fa-heart" aria-hidden="true"></i>
                                    </li>
                                    <li id="buttons"  class="buttons">
                                        <i class="far fa-thumbs-down" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex mt-2 ms-2 ps-2">
                                <img class="border me-2" id="subtitle-profile"
                                    src="./assets/img/avatar-2.jpg"
                                    alt="">
                                <p>Liked by <span id="weight-600">johndoe</span> and <span id="weight-600">1256
                                        others</span></p>
                            </div>
                            <div class="lh-1 ps-3 pb-3">
                                <div class="d-flex">
                                    <h6 class="ms-1">williamanderson7</h6>
                                    <p class="ms-1">Sometimes I just go out and play alone.</p>
                                </div>
                                <div>
                                    <p id="show-comments" class="ms-1">View all 182 comments</p>
                                </div>
                                <div class="d-flex justify-content-between pe-4">
                                    <div class="d-flex">
                                        <h6 class="ms-1">johndoe</h6>
                                        <p class="ms-1">emotional :(</p>
                                    </div>
                                    <i id="comment-like" class="far fa-heart"></i>
                                </div>
                                <div>
                                    <p id="time-info" class="ms-1">2 HOURS AGO</p>
                                </div>
                                <div class="d-flex justify-content-between p-2 border-top">
                                    <i id="icons" class="far fa-smile"></i>
                                    <input id="comment-input" class="border-0 w-100 m-1" type="text"
                                        placeholder="Add a comment...">
                                    <button class="border-0" disabled>Post</button>
                                </div>
                            </div>
                    </article>
                </section>
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