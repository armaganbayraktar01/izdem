<?php

function app_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function app_view($viewerName){
    return PATH . '/app/view/' . $viewerName . '.php';
}

function route($index){
    global $route;

    return $route[$index] ?? false;

}