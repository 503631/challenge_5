<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
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
               <summary>How do I pay?</summary>
               <p class="text">- If you press the pay button you will be brought to the paying page.</p>
          </details>
          <details>
               <summary>What are the opening times?</summary>
               <p class="text">- Monday-Friday from 9:00 until 16:00 uur</p>
               <p class="text" style="color:red;">- Closed on weekends</p>
          </details>
          <details>
               <summary>How do I order?</summary>
               <p class="text">- If you go to the product page you can add products to your cart.</p>
          </details>
          <details>
               <summary>How can I give an feedback?</summary>
               <p class="text">- On the contact page you can contact us and give feedback.</p> 
          </details>
          <details>
               <summary>Do you deliver?</summary>
               <p class="text">- No, only take away.</p> 
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

