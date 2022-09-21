<?php

define('PATH', realpath('.'));
define('SUBFOLDER', TRUE );
//define('URL', $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']);
define('URL', 'http://localhost/izdem');


return [
    'db' => [
        'name' => 'izdem',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => ""
    ]
];