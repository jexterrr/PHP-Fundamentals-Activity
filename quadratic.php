<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quadratic Equation Calculator</title>
</head>

<body>
     <?php
     if (!isset($_POST['compute'])) {
     ?>

          <h2>PHP Fundamentals Activity</h2>

          <button onclick="window.location.href='login.php'">User Login</button>
          <button onclick="window.location.href='quadratic.php'">Quadratic Equation Calculator</button>
          <button onclick="window.location.href='orders.php'">Orders Menu</button>

          <hr>

          <h2>Quadratic Equation Discriminant Calculator</h2>
          <form method="POST" action="">
               <label for="a">Enter value for a:</label>
               <input type="number" step="any" name="a" required><br><br>

               <label for="b">Enter value for b:</label>
               <input type="number" step="any" name="b" required><br><br>

               <label for="c">Enter value for c:</label>
               <input type="number" step="any" name="c" required><br><br>

               <input type="submit" name="compute" value="Compute">
          </form>
     <?php
     } else {
          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          $discriminant = ($b * $b) - (4 * $a * $c);

          echo '
          <form method="POST" action="">
               <h3>Discriminant: ' . $discriminant . '</h3>
          </form>';
     }
     ?>
</body>

</html>