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
    <img class="homepagephoto" src="images/kantine.jpg" />
    <div class="video">
      <video width="320" height="240" controls>
        <source src="video/einstructi.mp4" type="video/mp4">
        <source src="video/einstructi.ogg" type="video/ogg">
       </video>

       <div class="Welcome">
        <h2>Welkow</h2>
        <h3>
         <p>Welcome to our website.<br />
          On our website you can see our menu</br>
          and order of you found something to eat and/or drink.</p>
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
