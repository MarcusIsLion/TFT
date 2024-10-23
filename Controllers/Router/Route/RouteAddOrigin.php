<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteAddOrigin
class RouteAddOrigin extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->AddOrigin();
    }

    protected function post($params = [])
    {
        // Optionnel : Appeler une méthode spécifique pour le POST
        $this->controller->AddOrigin();
    }
}
