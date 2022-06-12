<?php
require __DIR__.'/top.php';
?>
<main class="main">
<h1>Paulius Tvartas</h1>
<form action="" method="POST">
Svoris
<input type="number" name="svoris" required>
<label for="animals">Pairink gyvūną:</label>
<select id="animals" name="animals">
  <option value="Avis">Avis</option>
  <option value="Antis">Antis</option>
  <option value="Antilopė">Antilopė</option>
</select>
<button class="btn">CREATE</button>
</form>


<?php
require __DIR__.'/bottom.php';
?>