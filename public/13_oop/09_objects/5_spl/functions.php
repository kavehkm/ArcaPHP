<?php
function load_service($service_name)
{
    $path_to_service = 'services/' . $service_name . '.php';
    if (file_exists($path_to_service)) {
        require $path_to_service;
    }
}


function load_model($model_name)
{
    $path_to_model = 'models/' . $model_name . '.php';
    if (file_exists($path_to_model)) {
        require $path_to_model;
    }
}


// register loaders
spl_autoload_register('load_model');
spl_autoload_register('load_service');