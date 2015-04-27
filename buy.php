

<html>
  <head>
    <title>Buy Now</title>
    <script type="text/javascript" src = "js/order.js"></script>
  </head>

  <body>
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
  </body>
</html>
