<?php


$menu = <<<HTML
<div class="bestelingen">
    <div class="row">
        <div  class="menutitle" name="titel">$leerlingnummer</div>
        <div class="price" name="prijs">$bestelling_nummer</div>
    </div>
</div>
</form>


HTML;

echo $menu;
?>