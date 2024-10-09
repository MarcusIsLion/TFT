<?php

namespace Controllers;

class MainController
{
    #region Attributes
    private $engine;
    #endregion

    /**
     * Constructor
     */
    public function index(): void
    {
        echo $this->engine->render('home', ['tftSetName' => 'Remix Rumble']);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->engine = new \League\Plates\Engine(__DIR__ . "/../Views");
    }
}
