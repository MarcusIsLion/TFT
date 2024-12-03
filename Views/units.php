<?php
$this->layout('template', ['title' => 'TP TFT - Units list Page', 'message' => $message]);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<?php
$unitsGet = $units;
?>
<div class="cards-container">
    <?php foreach ($unitsGet as $unit) { ?>
        <div class="card">
            <img src="<?php echo $unit->getUrlImg(); ?>" alt="<?php echo $unit->getName(); ?>" class="card-image">
            <div class="card-content">
                <ul class="abilities">
                    <!--<li>La voie porteuse</li>-->
                </ul>
                <div class="card-actions">
                    <a class="edit-btn" href="?action=edit-unit&id=<?= $unit->getid() ?>">✏️</a>
                    <a class="delete-btn" href="?action=delete-unit&id=<?= $unit->getid() ?>">🗑️</a>
                </div>
                <h3 class="unit-name"><?php echo ($unit->getName() . "<br/>(" . $unit->getOrigin() . ")"); ?></h3>
                <div class="unit-info">
                    <span class="cost-icon">💰</span>
                    <span class="unit-cost"><?php echo number_format($unit->getCost(), 2, ',', ' ') . '€'; ?></span>
                </div>
            </div>
        </div>
    <?php } ?>
</div>