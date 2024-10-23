<?php

use Models\Unit;

$this->layout('template', ['title' => 'TP TFT - Search']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<div class="cards-container">
    <div class="form-container">
        <div class="card-content">
            <form>
                <div class="form-group">
                    <label for="name">Votre recherche :</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="filter">Filtre de recherche :</label>
                    <select id="filter" name="filter">
                        <?php
                        $unitClass = new Unit();
                        $reflect = new ReflectionClass($unitClass);
                        $propertiesInClassUnit = $reflect->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

                        foreach ($propertiesInClassUnit as $property) {
                            echo '<option value="' . $property->name . '">' . $property->name . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="submit-btn">rechercher</button>
            </form>
        </div>
    </div>
</div>