<?php
$id = (int)$_GET['category_id'];

$photos = $db->query("SELECT * FROM photos WHERE category_id = ?", [$id])->findAllOrFail();

$title = "Photo album :: " . h($_GET['name']);

require_once VIEWS . '/photos.tpl.php';