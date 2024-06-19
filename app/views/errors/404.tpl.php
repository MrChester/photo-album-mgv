<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3 d-flex flex-column">
    <div class="container flex-grow-1 flex-shrink-1 d-flex flex-column justify-content-center">
        <div class="error-template d-flex flex-column align-items-center">
                <div>
                    <h1>
                        Oops!</h1>
                    <h2>
                        404 Not Found</h2>
                    <div class="error-details mb-4">
                        Sorry, an error has occurred, Requested page not found!
                    </div>
                    <div class="error-actions">
                        <a href="/" class="btn btn-success opacity-75 text-white btn-lg" style="height: auto">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="ms-2">Take Me Home</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </div>
</main>

<?php require VIEWS . '/incs/footer.php' ?>