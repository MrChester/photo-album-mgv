<?php

$photos = $db->query('SELECT photos.* FROM photos LEFT JOIN categories ON photos.category_id=categories.id')->findAllOrFail();

$title = "Photo album :: Album";

require_once VIEWS . '/photos.tpl.php';