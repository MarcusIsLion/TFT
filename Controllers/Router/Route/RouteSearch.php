<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteIndex
class RouteSearch extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->search();
    }

    protected function post($params = [])
    {
        // Optionnel : Appeler une méthode spécifique pour le POST
        $this->controller->search();
    }
}
