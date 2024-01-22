<?php

namespace App\Core;

class Controller
{
    public function view($view, $data = [])
    {
        $element = new View();
        require_once '../resources/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}
