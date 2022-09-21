<?php

function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName . '.php';
}

function admin_view($viewerName){
    return PATH . '/admin/view/' . $viewerName . '.php';
}
/*
function route($index){
    global $route;

    return $route[$index] ?? false;

}*/