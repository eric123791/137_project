<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- sitemap.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Nature's Source - Canada's largest specialty vitamin store</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js"> </script>
    <script type="text/javascript" src="js/message.js"></script>
  </head>
  <body onload = "scrollingMsg()">
    <div id="page">
      <?php
       include("common/welcome.php");
       include("common/mainmenu.php");
      ?>
      <div id="content">
        <div id="textOnly">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="buy.php">Buy Now</a></li>
                  <li>
                    Products and Services
                    <ul>
                      <li><a href="products.php">Product Catalog</a></li>
                      <li><a href="services.php">Services</a></li>
                    </ul>
                  </li>
                  <li>
                    Contact Us
                    <ul>
                      <li><a href="contact.php">Give us feedback</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="sitemap.php">Site Map</a>
                  </li>
                </ol>
        </div>
      </div>
      <?php
      include("common/footer.php");
      ?>
    </div>
  </body>
</html>
