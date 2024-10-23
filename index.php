<?php
#region Import
/**
 * Made for import file
 */
require_once("Helpers/Psr4AutoloaderClass.php");
#endregion

#region use
/**
 * Made for import namespace
 */

use Helpers\Psr4AutoloaderClass;
#endregion

#region code
/**
 * Made for the algorithm part
 */
$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\League\Plates', '/Vendor/Plates/src');
$loader->addNamespace('\Controllers', '/Controllers');
$loader->addNamespace('\Config', '/Config');
$loader->addNamespace('\Models', '/Models');

$Controller = new \Controllers\MainController();
$Controller->index();

$UnitDAO = new \Models\UnitDAO();
$units = $UnitDAO->getAll();
#endregion

?>
<div class="cards-container">
    <?php foreach ($units as $unit): ?>
        <div class="card">
            <img src="<?php echo $unit->getUrlImg(); ?>" alt="<?php echo $unit->getName(); ?>" class="card-image">
            <div class="card-content">
                <ul class="abilities">
                    <!--<li>La voie porteuse</li>-->
                </ul>
                <div class="card-actions">
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </div>
                <h3 class="unit-name"><?php echo ($unit->getName() . "<br/>(" . $unit->getOrigin() . ")"); ?></h3>
                <div class="unit-info">
                    <span class="cost-icon">💰</span>
                    <span class="unit-cost"><?php echo $unit->getCost() . '€'; ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>