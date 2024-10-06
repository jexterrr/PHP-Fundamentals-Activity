<?php
date_default_timezone_set("Asia/Manila");
if (isset($_POST['submit'])) {

     $order = $_POST['order'];
     $quantity = $_POST['quantity'];
     $cash = $_POST['cash'];

     // Menu prices
     $prices = [
          'Burger' => 50,
          'Fries' => 75,
          'Steak' => 150
     ];

     $totalCost = $prices[$order] * $quantity;


     if ($cash >= $totalCost) {
          $change = $cash - $totalCost;
          echo "<div style='border-style: solid;'>";
          echo "<h3 style='font-weight: bold;display: flex;align-items: center;justify-content: center;'>RECEIPT</h3>";
          echo "<h3>Total Price: $totalCost</h3>";
          echo "<h3>You Paid: $cash</h3>";
          echo "<h3>CHANGE: $change</h3>";
          echo "<h3>" . date("Y/m/d") . " " . date("h:i:sa") . "</h3>";
          echo "</div>";
     } else {
          $needed = $totalCost - $cash;
          echo "<div style='border-style: dotted; border-color: red;'>";
          echo "<h3 style='color: red;'>Sorry, not enough balance.</h3>";
          echo "<h3 style='color: red;'>You need $needed more.</h3>";
          echo "</div>";
     }


     exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Order Menu</title>

     <style>
          table,
          th,
          td {
               border-collapse: collapse;
               border-style: double;
               padding: 10px;
          }

          th,
          td {
               text-align: center;
          }
     </style>
</head>

<body>
     <h2>PHP Fundamentals Activity</h2>

     <button onclick="window.location.href='login.php'">User Login</button>
     <button onclick="window.location.href='quadratic.php'">Quadratic Equation Calculator</button>
     <button onclick="window.location.href='orders.php'">Orders Menu</button>

     <hr>

     <form method="POST" action="">
          <label for="order">Select an order</label>
          <select name="order" required>
               <option value="Burger">Burger</option>
               <option value="Fries">Fries</option>
               <option value="Steak">Steak</option>
          </select>
          <br><br>

          <label for="quantity">Quantity</label>
          <select name="quantity" required>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
          </select>
          <br><br>

          <label for="cash">Cash</label>
          <input type="number" name="cash" required>
          <br><br>

          <input type="submit" name="submit" value="Submit">
     </form>
</body>

</html>