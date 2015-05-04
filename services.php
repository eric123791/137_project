<!-- services.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>TicketzHub - Services</title>
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
      <p>TicketzHub currently provides three methods of ticket delivery. <br/><br/>
      1) E-mail: We will send you a copy of your tickets to your email. <br/>
      2) Mail to Address: We will mail you your tickets. <br/>
      3) Will Call: You can pick up your tickets at the Will Call window at the stadium. <br/>
      </p>

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
