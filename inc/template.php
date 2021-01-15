<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<?php
   $menu = <<<HTML
   <form action="./shopping.php" method="post">
   <div class="contentItem">
     <div class="row">
     <div  class="menutitle" name="id">$id</div>
        <div  class="menutitle" name="titel">$titel</div>
        <input hidden value="$titel" name="titel" ><br>
        <div class="price" name="prijs">€$prijs</div>
        <input hidden value="$prijs" name="prijs"><br>
        <input hidden value="$id" name="id"><br>
     </div>
        <img src="$img">
        <input type="number" min="0" name="aantal">
        <input class="button" type="submit" value="Kopen">
   </div>
   </form>

   HTML;

   echo $menu;
   ?>
</body>
</html>

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

