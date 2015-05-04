<script type="text/javascript" src="js/menu.js"></script>

<div id = "mainMenu" onmouseout = "hide()">
  <ul class="mainLinks">
    <li><a href="index.php" onmouseover="show('m1')">Home</a></li>
	<li><a href="buy.php" onmouseover="show('m2')">Buy Now</a></li>
    <li>
    	<a href="products.php" onmouseover="show('m3')">Products and Services</a>
 		<div id="m3" onmouseover="show('m3')">
 			<a href="products.php">Products</a>
 			<a href="services.php">Services</a>
 		</div>
    </li>
    <li>
    	<a href="yourtickets.php" onmouseover="show('m4')">Your Tickets</a>
    	<div id="m4" onmouseover="show('m4')">
 			<a href="yoursales.php">Your Sales</a>
 		</div>
    </li>
    <li><a href="about.php" onmouseover="show('m5')">About Us</a></li>
  </ul>
</div>
