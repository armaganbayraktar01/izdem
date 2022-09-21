<?php
//admin/route1 eğer yoksa admin ana sayfasına yönlendir

if (!route(1)){
    $route[1] = 'index';
}

// puantor altındaki helper
if (!file_exists(puantor_controller(route(1)))){
    $route[1] = 'index';
 }

//view altındaki admin açılacak

require puantor_controller(route(1));