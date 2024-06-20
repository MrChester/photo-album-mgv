<?php

$title = "Photo album :: Home";

$categories = $db->query('SELECT * FROM categories')->fetchAll();

require_once VIEWS . '/index.tpl.php';