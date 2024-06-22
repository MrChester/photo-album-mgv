<?php

return [
    'host' => 'MySQL-5.7', // ospanel v.6 В приложениях, при подключении к конкретной базе данных, вместо localhost используйте название движка базы данных (MariaDB-11.2 и т. п.).
    'dbname' => 'test',
    'username'=> 'root',
    'password'=> '',
    'charset'=> 'utf8mb4', // utf8mb4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // php < v.8
    ],
];