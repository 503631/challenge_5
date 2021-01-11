<?php
// $menu = <<<HTML

// <div class="contentItem">
//     <div class="row">
//         <div class="menutitle">$titel</div>
//         <div class="price">€$prijs</div>
//     </div>
//     <img src="$img">
//     <button >Kopen</button>
// </div>

// HTML;

// echo $menu;

$menu = <<<HTML
<form action="DELETE.php" method="post">
<div class="contentItem">
    <div class="row">
        <div  class="menutitle" name="titel">$titel</div>
        <input hidden value="$id" name="id">
        <input hidden value="$titel" name="titel"><br>
        <input hidden value="$prijs" name="prijs"><br>
        <div class="price" name="prijs">€$prijs</div>
    </div>
    <img src="$img">
    <input type="submit" value="delete">
</div>
</form>


HTML;

echo $menu;
