<?php

namespace Controllers\Router;

use Exception;

// Classe abstraite Route
abstract class Route
{
    protected $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function action($params = [], $method = 'GET')
    {
        if ($method === 'GET') {
            $this->get($params);
        } elseif ($method === 'POST') {
            $this->post($params);
        }
    }

    protected function getParam(array $array, string $paramName, bool $canBeEmpty = true)
    {
        if (isset($array[$paramName])) {
            if (!$canBeEmpty && empty($array[$paramName]))
                throw new Exception("Paramètre '$paramName' vide");
            return $array[$paramName];
        } else
            throw new Exception("Paramètre '$paramName' absent");
    }

    abstract protected function get($params = []);
    abstract protected function post($params = []);
}
