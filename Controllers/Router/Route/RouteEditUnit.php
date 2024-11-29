<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteEditUnit
class RouteEditUnit extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->EditUnit((int)(parent::getParam($_GET, "id", false)));
    }

    protected function post($params = [])
    {
        $this->controller->EditUnit((int)(parent::getParam($_POST, "id", false)));
    }
}
