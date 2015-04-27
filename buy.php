

<html>
  <head>
    <title>Buy Now</title>
    <script type="text/javascript" src = "js/order.js"></script>
  </head>

  <body>
    <table summary="Our E-Store">
      <tr>
        <td colspan="5">
          <img src="images/logo.png" alt="TicketzHub" />
        </td>
      </tr>
      <tr>
        <td width="20%"><a href="index.php">Home</a></td>
        <td width="20%"><a href="buy.php">Buy Now</a></td>
        <td width="20%"><a href="products.php">Products and Services</a></td>
        <td width="20%"><a href="yourtickets.php">Your Tickets</a></td>
        <td width="20%"><a href="about.php">About Us</a></td>
      </tr>
    </table>
    <form id = "orderForm" action = "" onsubmit = "processOrder()">
      <fieldset>
        <table>
          <tr valign = "top">
            <th><h1>Buy Now</h1></th>
          </tr>
          <tr valign = "top">
            <td>Ticket Type: </td>
            <td>
              <select name = "ticketType">
                <option>NBA</option>
                <option>NFL</option>
                <option>MLB</option>
              </select>
            </td>
          </tr>
          <tr valign = "top">
            <td>Teams: </td>
            <td>
              <select name = "team">
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
                <option>G</option>
              </select>
            </td>
          </tr>

          <tr valign = "top">
            <td>Date: </td>
            <td><input type = "date" name = "date" /></td>
          </tr>

          <tr valign = "top">
            <td>Number of Tickets: </td>
            <td><input type = "text" name = "numTickets" /></td>
          </tr>
          <tr>
            <td><input type = "submit" value = "Confirm" /></td>
            <td><input type = "reset" value = "Reset" /></td>
          </tr>
        </table>
      </fieldset>
    </form>
    <table>
    <tr>
        <td colspan="3">TicketzHub &copy; 2015 Hua Hsin and Edmond Ye </td>
        <td><a href="contact.php">Contact Us</a></td>
        <td><a href="sitemap.php">Site Map</a></td>
      </tr>
    </table>
  </body>
</html>
