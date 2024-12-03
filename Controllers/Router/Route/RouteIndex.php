<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteIndex
class RouteIndex extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->index();
    }

    protected function post($params = [])
    {
        $this->controller->index();
    }
}
