

<html>
<head>
  <title>Buy Now</title>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script type="text/javascript" src = "js/order.js"></script>
</head>

<body onload = "startRotation()">
  <div id = "page">
    <?php
     include("common/welcome.php");
     include("common/mainmenu.php");
    ?>

    <div id = "content">
      <form id = "orderForm" action = "scripts/processBuy.php" method="post" onsubmit = "retun processOrder()">
        <fieldset>
          <table>

            <tr valign = "top">
              <th><h1>Buy Now</h1></th>
            </tr>
            <tr valign = "top">
              <td>Name: </td>
              <td><input type = "text" name = "name" /></td>
            </tr>
            <tr valign = "top">
              <td>Email: </td>
              <td><input type = "email" name = "email" /></td>
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
            <?php
             include("common/rotate.php");
            ?>
            <tr valign = "top">
              <td>Teams: </td>
              <td>
                <select name = "team" onchange = "changePrice()">
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
              <td>Price per ticket: </td>
              <td><p id = "ticketPrice">$10</p></td>
            </tr>

            <tr valign = "top">
              <td>Number of Tickets: </td>
              <td><input type = "number" name = "numTickets" min = "1" /></td>
            </tr>
            <tr>
              <td><input type = "submit" value = "Confirm" /></td>
              <td><input type = "reset" value = "Reset" /></td>
            </tr>
          </table>
        </fieldset>
      </form>
      <?php
       include("common/footer.php");
      ?>
    </div>
  </div>
</body>
</html>
