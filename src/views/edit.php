<?php
require __DIR__.'/top.php';
?>
<main class="main">
<h1>Redagavimas</h1>
<form action="" method="post" class="action2 gap">
        <span class="value"><?= $users['animals']?></span>
        <span class="value"><?= $users['svoris']?> kg</span>
        <span>Keisti svori: <input type="number" name="add" required></span>
        <button class="btn">Redaguoti</button>
    </form>
<?php
require __DIR__.'/bottom.php';
?>