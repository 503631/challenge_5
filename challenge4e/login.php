<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
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
  <div>


    <?php
    include_once("inc/connectien.inc.php");
    include_once("inc/login2.inc.php");
    if ($_POST['name'] == $name && $password == hash('sha256', $_POST['password'])) {
        header("Location: ../admin/admin.php");
    } else {
        header("Location: login.html");
    }
    ?>

    
</body>

</html>