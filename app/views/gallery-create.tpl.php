<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">
    <div class="container">
        <h2>New Gallery</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Gallery name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Type gallery name"
                    value="<?= trim(old('name')) ?>">
                <?php if (isset($errors['gallery']['name'])): ?>
                    <div class="invalid-feedback d-block ps-1">
                        <?= $errors['gallery']['name'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Gallery link</label>
                <input name="link" type="text" class="form-control" id="link" placeholder="Type gallery link"
                    value="<?= trim(old('link')) ?>">
                <?php if (isset($errors['gallery']['link'])): ?>
                    <div class="invalid-feedback d-block ps-1">
                        <?= $errors['gallery']['link'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-auto">
                <button name="submit" type="submit" class="btn btn-success opacity-75 text-white me-1">Create</button>
            </div>

        </form>
    </div>
</main>

<?php require VIEWS . '/incs/footer.php' ?>