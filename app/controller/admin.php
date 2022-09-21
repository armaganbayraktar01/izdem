<?php
//admin/route1 eğer yoksa admin ana sayfasına yönlendir

if (!route(1)){
    $route[1] = 'index';
}

// cpp altındaki helper
if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
 }

//view altındaki admin açılacak

require admin_controller(route(1));