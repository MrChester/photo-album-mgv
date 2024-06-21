<?php

$id = (int)$_GET['photo_id'] ?? 0;

$photo = $db->query("SELECT * FROM photos WHERE id = ? LIMIT 1", [$id])->findOrFail();

$title = "Photo album :: {$photo['name']}";

require_once VIEWS . '/photo.tpl.php';