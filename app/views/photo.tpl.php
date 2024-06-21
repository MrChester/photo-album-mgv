<?php require VIEWS . '/incs/header.php' ?>
<main class="main">
    <div class="container">
        <!--Large Screen Size Post Side-->
        <section id="post-side" class="border p-0 my-4 bg-white">
            <article class="bg-white">
                <div id="post-top-bar" class="p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <img id="post-profile-story" src="assets/img/avatar-1.jpg" alt="">
                        <label class="d-inline ps-2" for=""><span id="post-nick">williamanderson7</span></label>
                    </div>
                    <div>
                        <i id="dots" aria-label="More options" class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
                <div>
                    <img class="w-100" id="post" src="<?= $photo['link'] ?>" alt="<?= $photo['slug'] ?>">
                </div>
                <div id="bottom-bar">
                    <div class="mt-3">
                        <ul class="buttons-list d-flex justify-content-start align-items-end">
                            <li id="buttons" class="buttons">
                                <i class="far fa-heart" aria-hidden="true"></i>
                            </li>
                            <li id="buttons" class="buttons">
                                <i class="far fa-thumbs-down" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex mt-2 ms-2 ps-2">
                        <img class="border me-2" id="subtitle-profile" src="assets/img/avatar-2.jpg" alt="">
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
<?php require VIEWS . '/incs/footer.php' ?>