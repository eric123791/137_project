<!-- products.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>TicketzHub - Products</title>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
</head>
<body onload = "startRotation()">
  <div id = "page">
    <?php
     include("common/welcome.php");
     include("common/mainmenu.php");
    ?>
  <div id="content">
    <div id="text">
      <p>TicketzHub provides a wide variety of products and
        services that focus on different kind of tickets. We
        hope and trust that you will find something among our offerings
        that you will find useful and appealing. Please click on one of
        the links at the left to find out more about each option.</p>

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
