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
  <!-- #region Navbar-->
  <div id="navbar"></div>
  <script>
    $("#navbar").load("common/navbar.html");
  </script>
  <!-- #endregion -->
  <div>
    <!----end-->

    <div id="content">
    </div>
    <!---end-->
    <div class="block">


        <?php
        require_once('connection.php');
        echo "From session<br>";
        $titel = $_SESSION['titel'];
        echo "Title:";
        echo $titel;
        $prijs = $_SESSION['prijs'];
        $totaal = $_SESSION['totaal'];
        $lijst_met_bestellingen = $_SESSION['lijst'];
        $lijst_met_bestellingen = array();
        array_push($lijst_met_bestellingen, $titel);
        $_SESSION['lijst'] = $lijst_met_bestellingen;

        $lijst = $lijst_met_bestellingen;
        $totaal = $_SESSION['totaal'];
        
        echo "First name:";
        echo $titel;
        echo "<br>";
        echo "password:";
        echo $prijs;
        echo "<br>";
        echo $totaal;
        ?>
    </div>

    <div class="footer">
    </div>
    <!---end-->

</body>

</html>