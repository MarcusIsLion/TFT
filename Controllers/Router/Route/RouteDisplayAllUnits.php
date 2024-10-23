<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteAddUnit
class RouteDisplayAllUnits extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->DisplayAllUnits();
    }

    protected function post($params = [])
    {
        // Optionnel : Appeler une méthode spécifique pour le POST
        $this->controller->DisplayAllUnits();
    }
}
