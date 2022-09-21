<?php

function puantor_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/puantor/controller/' . $controllerName . '.php';
}

function puantor_view($viewerName){
    return PATH . '/puantor/view/' . $viewerName . '.php';
}
/*
function route($index){
    global $route;

    return $route[$index] ?? false;

}*/