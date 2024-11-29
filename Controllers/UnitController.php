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
    public function DisplayAllUnits(?string $message = null): void
    {
        $UnitDAO = new \Models\UnitDAO();
        $units = $UnitDAO->getAll();
        echo $this->engine->render('units', ['tftSetName' => 'All units :', 'units' => $units, 'message' => $message]);
    }

    /**
     * Constructor
     */
    public function AddUnit(?string $message = null, array $data = null): void
    {
        echo $this->engine->render('addUnit', ['tftSetName' => 'Add a new unit :', 'message' => $message]);
    }

    /**
     * Constructor
     */
    public function deleteUnitAndIndex(int $idUnit): void
    {
        $UnitDAO = new \Models\UnitDAO();
        $UnitDAO->delete($idUnit);
        $this->DisplayAllUnits("Unit deleted successfully");
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
