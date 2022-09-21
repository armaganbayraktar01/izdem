<?php

require __DIR__ . '/app/init.php';

$route = array_filter(explode('/', $_SERVER['REQUEST_URI']));

if (SUBFOLDER === true){
   array_shift($route);
}

if (!route(0)){
   $route[0] = 'index';
}

// cpp altındaki helper
if (!file_exists(app_controller(route(0)))){
   $route[0] = '404';
}

require app_controller(route(0));
//print_r($route);



/*
foreach ($_SERVER as $k => $v){
   echo '<li>' . $k . ' => ' . $v . '</li>';
};
*/