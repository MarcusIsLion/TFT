<?php
$this->layout('template', ['title' => 'TP TFT - Add Unit']);
$isEdition = isset($_GET["action"]) && $_GET["action"] == "edit-unit";
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<div class="cards-container">
    <div class="form-container">
        <div class="card-content">
            <?php
            if ($isEdition) {
            ?>
                <form action="index.php?action=edit-unit" method="post">
                    <input type="hidden" id="id" name="id" value="<?= $this->e($data[0][0]->getId()); ?>">
                <?php
            } else {
                ?>
                    <form action="index.php?action=add-unit" method="post">
                    <?php
                }
                    ?>

                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" id="name" name="name" value="<?php if ($isEdition) {
                                                                            echo $this->e($data[0][0]->getName());
                                                                        } else {
                                                                            echo "";
                                                                        } ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cost">Coût:</label>
                        <input type="number" id="cost" name="cost" value="<?php if ($isEdition) {
                                                                                echo $this->e($data[0][0]->getCost());
                                                                            } ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="origin">Origine:</label>
                        <input type="text" id="origin" name="origin" value="<?php if ($isEdition) {
                                                                                echo $this->e($data[0][0]->getOrigin());
                                                                            } ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="url_img">URL de l'image:</label>
                        <input type="url" id="url_img" name="url_img" value="<?php if ($isEdition) {
                                                                                    echo $this->e($data[0][0]->getUrlImg());
                                                                                } ?>" required>
                    </div>
                    <button type="submit" class="submit-btn">Soumettre</button>
                    </form>
        </div>
    </div>
</div>