<?php

namespace Controllers\Router\Route;

use Controllers\Router\Route;
use Models\UnitDAO;
use Models\Message;

// Classe RouteEditUnit
class RouteEditUnit extends Route
{
    public function __construct($controller)
    {
        parent::__construct($controller);
    }

    protected function get($params = [])
    {
        $UnitDAO = new UnitDAO();
        $unit = $UnitDAO->getById((int)(parent::getParam($_GET, "id", false)));
        $data[] = [$unit];
        $this->controller->EditUnit("", $data);
    }

    protected function post($params = [])
    {
        try {
            $unitDAO = new UnitDAO();
            $unitDAO->update(
                [
                    'id' => (int)(parent::getParam($_POST, "id", false)),
                    'name' => parent::getParam($_POST, "name", true),
                    'cost' => (int)(parent::getParam($_POST, "cost", true)),
                    'origin' => parent::getParam($_POST, "origin", true),
                    'urlImg' => parent::getParam($_POST, "url_img", true)
                ]
            );
            $this->controller->DisplayAllUnits("Unit edited successfully");
        } catch (\Exception $e) {
            $this->controller->EditUnit($e->getMessage());
        }
    }
}
