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
  <div>
    
    <img class="homepagephoto" src="images/kantine.jpg" />
    <video width="320" height="240" controls>
       <source src="vido/video.mp4" type="video/mp4">
       <source src="vido/video.ogg" type="video/ogg">
    </video>
        <h2 class="h2">Welkow to our website.<br />
      In our website you can see to our menu</br>
      and order of you found some delichius.</h2>
    <div class="vragencontainer">
      <div class="vragen">
        <h1>Meest gesteld vragen</h1>
        <ol>
          <li>Hoe moet ik betalen?</li>
          <p>- Als je boven op de betaalknop klikt zal je naar de betaal pagina gebracht worden.</p>
          <li>Wat zijn de openingstijden?</li>
          <p>- maandag-vrijdag<br /> 9:00 tot 16:00 uur<br /> </p>
          <p style="color:red;"> - gesloten in het weekend </p>
          <li>Hoe moet ik bestellen?</li>
          <p>- Als je op de producten pagina gaat kun jij bij eld product op bestellen klikken en dan komt die in je
            winkelmandje.</p>
          <li>Hoe kan ik feedback geven?</li>
          <p>- Bij de contact pagina. Jij kunt contact opnemen met ons en feedback geven.</p>
          <li>Word er ook bezorgd?</li>
          <p>- Nee, jij kan alleen afhalen.</p>
        </ol>
      </div>
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