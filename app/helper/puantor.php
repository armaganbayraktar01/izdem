<?php

function puantor_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/puantor/controller/' . $controllerName . '.php';
}

function puantor_view($viewerName){
    return PATH . '/puantor/view/' . $viewerName . '.php';
}

function puantor_url($url = false){
    return URL . '/puantor/' . $url;
}

function puantor_public_url($url = false){
    return URL . '/puantor/public/' . $url;
}