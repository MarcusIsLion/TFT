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
        echo $this->engine->render('home', ['tftSetName' => 'Welcome !']);
    }

    /**
     * constructor
     */
    public function search(): void
    {
        echo $this->engine->render('search', ['tftSetName' => 'Searching some thing ?']);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->engine = new \League\Plates\Engine(__DIR__ . "/../Views");
    }
}
