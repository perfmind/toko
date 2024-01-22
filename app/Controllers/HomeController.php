<?php

namespace App\Controllers;

use App\Core\Controller;
use Symfony\Component\Routing\RouteCollection;

class HomeController extends Controller
{
    public function index(RouteCollection $routes)
    {
        return $this->view("homepage/index");
    }
}
