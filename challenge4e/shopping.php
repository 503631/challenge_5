<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/test.css" />
    <title>Document</title>
</head>

<body>
    <div id="navbar">
        <a href="home.html">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="contact.html">CONTACT</a>
        <a class="login" href="login.html">LOG IN</a>
        <a id="shopping" href="shopping.php" class="fas fa-cart-plus"></a>
    </div>

    
    <!----end-->
    <div id="content">
    </div>
    <!---end-->
    <div class="block">
    <form action="./shopping.php" method="post" >
    <input hidden name="goed" >
    <input hidden value="$lijst" name="lijst" >
    <input hidden value="$totaal" name="totaal" >
    <input type="text" name="leerlingnummer" placeholder="leerlingnummer"><br />
    <input type="submit" value="aftekenen">
    </form>

    <form action="./shopping.php" method="post" >
    <input hidden name="prijs" value="0" >
    <input hidden name="clier" >
    <input type="submit" value="clier">
    </form>
        <?php
        require_once('connection.php');
        if(!isset($_SESSION['lijst'])){
            $_SESSION['lijst'] = [];
            $_SESSION['totaal'] = 0;
        }

        if(isset(($_POST['clier']))){
            $_SESSION['lijst'] = [];
            $_SESSION['totaal'] = 0;
        }
        if (isset($_POST['id'])) {
            array_push($_SESSION['lijst'],$_POST['id'],$_POST['aantal']); 
        // $_SESSION['titel'] = $_POST['titel'];
        $_SESSION['prijs'] = $_POST['prijs'];
        $_SESSION['totaal'] += $_POST['prijs'];
        $totaal = $_SESSION['totaal'];
        }
        if (isset($_POST['goed'])) {

            include_once("inc/connectien.inc.php"); 
            include_once("inc/collectbestelingen.inc.php");    
            include_once("inc/insert.inc.php");
            include_once("inc/rekken.inc.php");




            

            echo "totaal ";
            echo "€" . $tootaal;
            echo "<br/>";

            echo "UWE bestelling nummer:";
            echo $bestelling_nummer;

            $_SESSION['lijst'] = [];
            $_SESSION['totaal'] = 0;
        }
        
        // echo "First name:";
        // echo $_SESSION['titel'];
        // echo "<br/>";
        // echo "prijs:";
        // echo $_SESSION['prijs'];
        // echo "<br/>";
        // echo "totaal ";
        // echo "€" . $tootaal;
        // echo $_SESSION['totaal'];
        echo "<br/>";
        echo "bestelingen";
        echo "<br/>";
        foreach ($_SESSION['lijst'] as &$value){
            
            echo $value;
                // echo "<br/>";
        }


        
        // if ($_SESSION['prijs'] == "test") {
        //     echo "oke:";
        //     $link_address1 = '../index.html';
        //     echo "<a href='$link_address1'>Index Page</a>";
        // }
        ?>
        


    </div>
    <div class="footer">
    </div>
    <!---end-->
</body>

</html>