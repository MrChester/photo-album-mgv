<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fillable = ['name', 'link'];
    $data = load($fillable);
    // validation
    $errors = [];
    if (empty($data['name'])) {
        $errors['gallery']['name'] = 'Name is required';
    }
    if (empty($data['link'])) {
        $errors['gallery']['link'] = 'Link is required';
    }

    if (empty($errors)) {
        $query = $db->query("INSERT INTO categories (`name`, `link2`) VALUES (:name, :link)", $data);
        if ($query) {
            echo 'OK!';
        } else {
            echo 'DB Error!';
        }
        // redirect('/gallery/create');
    }
}

$title = "Photo album :: New Gallery";

require VIEWS . "/gallery-create.tpl.php";