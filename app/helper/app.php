<?php

function app_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function app_view($viewerName){
    return PATH . '/app/view/' . $viewerName . '.php';
}

//template

function site_url($url = false){
    return URL . '/' . $url;
}

function public_url($url = false){
    return URL . '/public/' . $url;
}

//route
function route($index){
    global $route;

    return $route[$index] ?? false;
}