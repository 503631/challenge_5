<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
    <!-- #region Navbar-->
    <div id="navbar"></div>
    <script>
        $("#navbar").load("common/navbar.html");
    </script>
    <!-- #endregion -->
<?php
        include_once("inc/invoegen.inc.php");
        if (isset($_POST['name'])) {
        include_once("inc/upload.inc.php");
        // include_once("upload.php");

        include_once("inc/collect.inc.php");
        include_once("inc/test.php");
        }
?>



    <!-- #region Footer-->
    <div id="footer"></div>
    <script>
        $("#footer").load("common/footer.html");
    </script>
    <!-- #endregion -->
</body>
</html>
