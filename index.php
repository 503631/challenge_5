<!DOCTYPE html>
<html lang="en">
<?php session_start();
$_SESSION['true'] = false; ?>
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
    <img class="homepagephoto" src="images/kantine.jpg" />
    <div class="video">
    
      <video width="320" height="240" controls>
      
        <source src="instructie/instructie1.mp4" type="video/mp4">
        <source src="instructie/instructie1.ogg" type="video/ogg">
       </video>
       instructie hoe jij kunt bestellen
       <div class="welkom">
         <h2>Welkom</h2>
         <h3>
          <p> Welkom op onze website.<br>
          In onze website jullie kunnen naar ons menu kijken<br>
          en bestellen als jullie iets lekkers vinden.</p>
        </h3>
      </div>
    </div>

  <!-- #region Footer-->
  <div id="footer"></div>
  <script>
    $("#footer").load("common/footer.html");
  </script>
  <!-- #endregion -->
</body>

</html>