<?php
$this->layout('template', ['title' => 'TP TFT - Add Unit']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<div class="cards-container">
    <div class="form-container">
        <div class="card-content">
            <form>
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="img_path">URL de l'image :</label>
                    <input type="text" id="img_path" name="img_path" required>
                </div>
                <button type="submit" class="submit-btn">Soumettre</button>
            </form>
        </div>
    </div>
</div>