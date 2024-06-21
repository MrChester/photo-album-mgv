<?php

$categories = $db->query('SELECT * FROM categories')->findAllOrFail();

$title = "Photo album :: Home";

require_once VIEWS . '/index.tpl.php';