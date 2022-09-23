<?php

//sql injection önlem
function post($data){
    if(isset($_POST[$data])){
        if (is_array($_POST[$data])){
            return array_map( function($item){
                return htmlspecialchars(trim($item));
            }, $_POST[$data]);
        }
        return htmlspecialchars(trim($_POST[$data]));
    }
}



// form controller
function form_control($data){
    return site_settings($data) ? site_settings($data) : null; 
}