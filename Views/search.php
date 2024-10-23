<?php
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
                <button type="submit" class="submit-btn">rechercher</button>
            </form>
        </div>
    </div>
</div>