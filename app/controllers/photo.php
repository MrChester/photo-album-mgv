<?php

$title = "Photo album :: Photo";

$photos = $db->query('SELECT * FROM photos')->fetchAll();

require_once VIEWS . '/photo.tpl.php';