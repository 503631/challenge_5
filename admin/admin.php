<!DOCTYPE html>
<html lang="en">
<?php        include_once("inc/secure.inc.php"); ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
    <title>Kantine Vista</title>
</head>

<body>
    <!-- #region Navbar-->
    <div id="navbar"></div>
    <script>
        $("#navbar").load("common/navbar.html");
    </script>
    <!-- #endregion -->
    <div id="menu">
    <div id="mid">
    <h1>voeg nieuwe gebruiker toe</h1>
    <form action="./admin.php" method="post" >
    <input hidden name="goed" >
    <input type="text" name="name" placeholder="name"><br />
    <input type="password" name="password" placeholder="password"><br />
    <input type="submit" value="login">
    </form>
<?php



    if (isset($_POST['goed'])) { 
        include_once("inc/connectien.inc.php");
        include_once("inc/collectlogin.inc.php");
        include_once("inc/login.inc.php");
    }

?>



    <!-- #region Footer-->
    <div id="footer"></div>
    <script>
        $("#footer").load("common/footer.html");
    </script>
    <!-- #endregion -->
    </div>

</body>

</html>