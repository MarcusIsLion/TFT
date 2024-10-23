<?php
$this->layout('template', ['title' => 'TP TFT - Add Unit']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<div class="cards-container">
    <div class="form-container">
        <div class="card-content">
            <form>
                <div class="form-group">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="cost">Coût:</label>
                    <input type="number" id="cost" name="cost" required>
                </div>
                <div class="form-group">
                    <label for="origin">Origine:</label>
                    <input type="text" id="origin" name="origin" required>
                </div>
                <div class="form-group">
                    <label for="url_img">URL de l'image:</label>
                    <input type="url" id="url_img" name="url_img" required>
                </div>
                <button type="submit" class="submit-btn">Soumettre</button>
            </form>
        </div>
    </div>
</div>