<?php

namespace Controllers\Router;

// Classe Router
class Router
{
    private $routeList = [];
    private $ctrlList = [];
    private $action_key;

    public function __construct($name_of_action_key = 'action')
    {
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }

    private function createControllerList()
    {
        $this->ctrlList = [
            "main" => new \Controllers\MainController(),
            "unit" => new \Controllers\UnitController()
        ];
    }

    private function createRouteList()
    {
        $this->routeList = [
            "index" => new \Controllers\Router\Route\RouteIndex($this->ctrlList["main"]),
            "search" => new \Controllers\Router\Route\RouteSearch($this->ctrlList["main"]),
            "display-all-units" => new \Controllers\Router\Route\RouteDisplayAllUnits($this->ctrlList["unit"]),
            "add-unit" => new \Controllers\Router\Route\RouteAddUnit($this->ctrlList["unit"]),
            "edit-unit" => new \Controllers\Router\Route\RouteAddUnit($this->ctrlList["unit"]),
            "delete-unit" => new \Controllers\Router\Route\RouteDeleteUnit($this->ctrlList["unit"]),
            "add-origin" => new \Controllers\Router\Route\RouteAddOrigin($this->ctrlList["unit"])
        ];
    }

    public function routing($get, $post)
    {
        $action = isset($get[$this->action_key]) ? $get[$this->action_key] : 'index';
        if (isset($this->routeList[$action])) {
            if (!empty($post)) {
                $this->routeList[$action]->action($post, 'POST');
            } else {
                $this->routeList[$action]->action($get, 'GET');
            }
        }
    }
}
