<?php


$menu = <<<HTML
<div class="bestelingen">
    <div class="row">
        <div  class="menutitle" name="titel">$titel</div>
        <div class="price" name="prijs">€$prijs</div>
        <div class="aantal" name="aantal">aantal:$aantal</div>
        <div class="aantal" name="aantal">totaal:$totaal</div>
    </div>
</div>
</form>


HTML;

echo $menu;
?>