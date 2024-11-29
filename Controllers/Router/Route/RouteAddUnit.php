<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteAddUnit
class RouteAddUnit extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $this->controller->AddUnit();
    }

    protected function post($params = [])
    {
        try {
            $data = [
                "id" => (int)(uniqid()),
                "name" => parent::getParam($_POST, "name", false),
                "cost" => (int)(parent::getParam($_POST, "cost", false)),
                "origin" => parent::getParam($_POST, "origin", false),
                "urlImg" => parent::getParam($_POST, "url_img", false)
            ];
            $unit = new \Models\Unit($data);
            $unitDAO = new \Models\UnitDAO();
            $unitDAO->add($unit);

            $this->controller->AddUnit("Unit added successfully");
        } catch (\Exception $e) {
            $this->controller->AddUnit($e->getMessage());
            return;
        }
        $this->controller->AddUnit();
    }
}
