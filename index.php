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
#endregion