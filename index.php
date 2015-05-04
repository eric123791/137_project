<html>
<head>
  <title>TicketzHub</title>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script type="text/javascript" src="js/rotate.js"></script>

</head>
<body onload = "startRotation()">
  <div id = "page">
    <?php
     include("common/welcome.php");
     include("common/mainmenu.php");
    ?>
    <div id="content">
      <div id="text">
        <h2> Welcome to the Website of TicketzHub!</h2>

        <p>This is our first foray onto the World Wide Web.
          We are a small company dedicated to provide a place
          to buy and sell sports tickets through the world wide web.
          Fast way to find a tickets. Easy way to sell a ticket,
          even if it is last minutes. We got you cover.
          We guarantee quick and hassle free transactions.
          Everything is simple here.
          <br /><br/>
          We sell all kinds of sports tickets: <br/>

          NBA tickets<br/>
          NFL tickets<br/>
          MLB tickets<br/>
        </p>
      </div>
      <?php
       include("common/rotate.php");
      ?>
    </div>

    <?php
     include("common/footer.php");
    ?>


  </div>


</body>
</html>
