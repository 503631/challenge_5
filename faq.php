<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/faq.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>FAQ</title>
</head>
<body>
 <!-- #region Navbar-->
 <div id="navbar"></div>
  <script>
    $("#navbar").load("common/navbar.html");
  </script>
  <!-- #endregion -->

    <div class="box">
       <p class="heading">FAQs</p>
       <div class="faqs">
          <details>
               <summary>Hoe moet ik betalen?</summary>
               <p class="text">- Als je boven op de betaalknop klikt zal je naar de betaal pagina gebracht worden.</p>
          </details>
          <details>
               <summary>Wat zijn de openingstijden?</summary>
               <p class="text">- maandag-vrijdag van 9:00 tot 16:00 uur</p>
               <p class="text">- gesloten in het weekend</p>
          </details>
          <details>
               <summary>Hoe moet ik bestellen?</summary>
               <p class="text">- Als je op de producten pagina gaat kun jij bij eld product op bestellen klikken en dan komt die in je winkelmandje.</p>
          </details>
          <details>
               <summary>Hoe kan ik feedback geven?</summary>
               <p class="text">- Bij de contact pagina. Jij kunt contact opnemen met ons en feedback geven.</p> 
          </details>
          <details>
               <summary>Word er ook bezorgd?</summary>
               <p class="text">- Nee, jij kan alleen afhalen.</p> 
          </details>
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
