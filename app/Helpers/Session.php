<?php

namespace App\Helpers;

class Session
{
    public function set($name,$value): void
    {
        $_SESSION[$name]=$value;
    }

    public function get($name)
    {
        if (isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
        return false;

    }

    public function remove($name)
    {
        unset($_SESSION[$name]);
    }
}