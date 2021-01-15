<?php
$menu = <<<HTML


<!-- <form action="./shopping.php" method="post"> -->
<div class="bone">
    <div class="row">
        <div  class="menutitle" name="titel">naam produckt: $titel</div>
        <div class="price" name="prijs">aantal: $aantal</div>
        <div class="price" name="prijs">perstuk: $perstuk</div>
        <div class="price" name="prijs">prijs:$prijs</div>       
</div>
</form>




HTML;
echo $menu;