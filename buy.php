

<html>
  <head>
    <title>Buy Now</title>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src = "js/order.js"></script>
  </head>

  <body>
    <div id = "page">
      <div id = "header">
        <!--#include virtual="common/logo.php"-->
        <div id="address">
          2980 Hamill Avenue<br />
          Los Angeles, CA 90014<br />
          Phone: 949-435-7872<br />
          Fax: 949-111-1111
        </div>
      </div>
    <!--#include virtual="common/mainmenu.php"-->

      <div id = "content">
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

              <tr valign = "top">
                <td>Total Price: </td>
                <td><p id = "totalPrice">$10</p></td>
              </tr>
              <tr>
                <td><input type = "submit" value = "Confirm" /></td>
                <td><input type = "reset" value = "Reset" /></td>
              </tr>
            </table>
          </fieldset>
        </form>
        
        <!--#include virtual="common/footer.php"-->
      </div>
    </div>
  </body>
</html>
