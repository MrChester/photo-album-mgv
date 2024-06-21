<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fillable = ['name', 'link'];
    $data = load($fillable);
    // validation
    $errors = [];
    if (empty(trim($data['name']))) {
        $errors['gallery']['name'] = 'Name is required';
    }
    if (empty(trim($data['link']))) {
        $errors['gallery']['link'] = 'Link is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO categories (`name`, `link`) VALUES (?, ?)", [
            $_POST['name'],
            $_POST['link'],
        ]);
    }
}

$title = "Photo album :: New Gallery";

require VIEWS . "/gallery-create.tpl.php";