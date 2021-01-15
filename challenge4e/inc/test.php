<?php
$menu = <<<HTML
<form action="./invoegen.php" method="post" >
<div class="contentItem">
    <div class="row">
        <div  class="menutitle" name="titel">$titel</div>
        <div class="price" name="prijs">€$prijs</div>
    </div>
    <img src="uploads/$img">
    <input type="submit" value="Kopen">
</div>
</form>
HTML;

echo $menu;
?>