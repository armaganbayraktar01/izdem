<?php

function app_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function app_view($viewerName){
    return PATH . '/app/view/' . $viewerName . '.php';
}

//template

function app_url($url = false){ //site url
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

function site_settings($data){
    global $site_settings; // app/site_settings.php
    return isset($site_settings[$data]) ? $site_settings[$data] : false;
}