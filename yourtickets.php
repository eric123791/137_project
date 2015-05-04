<!-- yourhealth.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>TicketzHub - Your Tickets</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
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
      <p>This section will give you a chance to obtain information about
        general health-related issues and concerns. We will ask one of our
        on-site healthcare professionals to address your questions, and
        each month we will post responses to those questions. We will also
        host a repository of responses here, which you can browse to find
        the health information most pertinent to you.</p>
        <p>We will also have various web-based tools to help you assess
          your health, along with some useful external links.</p>
          <p>Please click one of the links at the left for further
            information.</p>


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
