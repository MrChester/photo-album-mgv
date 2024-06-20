<?php

$title = "Photo album :: Album";

$photos = $db->query('SELECT photos.* FROM photos LEFT JOIN categories ON photos.category_id=categories.id')->fetchAll();

require_once VIEWS . '/photos.tpl.php';