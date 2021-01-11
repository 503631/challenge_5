<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
    <title>Kantine Vista</title>
    <style>

    </style>
</head>

<body>
    <!-- #region Navbar-->
    <div id="navbar"></div>
    <script>
        $("#navbar").load("common/navbar.html");
    </script>
    <!-- #endregion -->
    <div id="menu">
        <?php include_once("inc/connectien.inc.php") ?>
        <div id="menu">
            <?php include("inc/menu.inc.php") ?>
        </div>

    </div>

    <!-- #region Footer-->
    <div id="footer"></div>
    <script>
        $("#footer").load("common/footer.html");
    </script>
    <!-- #endregion -->
    </div>
</body>

</html>