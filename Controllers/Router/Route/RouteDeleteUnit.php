<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;

// Classe RouteDeleteUnit
class RouteDeleteUnit extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        try {
            $id = parent::getParam($_GET, "id", false);
            $unitDAO = new \Models\UnitDAO();
            $unitDAO->delete($id);
            $this->controller->DisplayAllUnits("Unit deleted successfully");
        } catch (\Exception $e) {
            $this->controller->DisplayAllUnits($e->getMessage());
            return;
        }
    }

    protected function post($params = [])
    {
        try {
            $id = parent::getParam($_POST, "id", false);
            $unitDAO = new \Models\UnitDAO();
            $unitDAO->delete($id);

            $this->controller->DisplayAllUnits("Unit deleted successfully");
        } catch (\Exception $e) {
            $this->controller->deleteUnitAndIndex();
            return;
        }
    }
}
