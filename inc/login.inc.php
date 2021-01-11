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
<form action="./login.php" method="post">
<div class="contentItem">
    <div class="row">
        <input type="text" placeholder="name"  name="name" ><br>
        <input type="password" placeholder="password"  name="password"><br>
    </div>
    <input type="submit" value="loggin">
</div>
</form>


HTML;

echo $menu;
