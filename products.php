<!-- products.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>TicketzHub - Products</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script type="text/javascript" src="js/message.js"></script>
</head>
<body onload = "startRotation();scrollingMsg()">
  <div id = "page">
    <?php
     include("common/welcome.php");
     include("common/mainmenu.php");
    ?>
  <div id="content">
    <div id="text">
      <p>TicketzHub provides tickets to your favorite sporting events. 
      Whether you want to watch a basketball game, a football game, or a baseball game. 
      TicketzHub will have the ticket for you. You can buy one ticket or twenty tickets, 
      either way we will try to accomadate your needs.</p>

      </div>
      <?php
       include("common/rotate.php");
      ?>
    </div>
    <?php
     include("common/footer.php");
    ?>

  </body>
  </html>
