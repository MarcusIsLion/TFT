<?php

namespace Controllers;

class UnitController
{
    #region Attributes
    private $engine;
    #endregion

    /**
     * Constructor
     */
    public function DisplayAllUnits(): void
    {
        $UnitDAO = new \Models\UnitDAO();
        $units = $UnitDAO->getAll();
        echo $this->engine->render('units', ['tftSetName' => 'All units :', 'units' => $units]);
    }

    /**
     * Constructor
     */
    public function AddUnit(): void
    {
        echo $this->engine->render('addUnit', ['tftSetName' => 'Add a new unit :']);
    }

    /**
     * Constructor
     */
    public function AddOrigin(): void
    {
        echo $this->engine->render('addOrigin', ['tftSetName' => 'Add a new origin :']);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->engine = new \League\Plates\Engine(__DIR__ . "/../Views");
    }
}
