<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User Login</title>
</head>

<body>
     <h2>PHP Fundamentals Activity</h2>

     <button onclick="window.location.href='login.php'">User Login</button>
     <button onclick="window.location.href='quadratic.php'">Quadratic Equation Calculator</button>
     <button onclick="window.location.href='orders.php'">Orders Menu</button>

     <hr>

     <h2>User Login</h2>
     <form method="POST" action="">
          <label for="username">Username:</label>
          <input type="text" name="username" required><br><br>

          <label for="password">Password:</label>
          <input type="password" name="password" required><br><br>

          <input type="submit" name="login" value="Login">
          <form method="POST"><button type="submit" name="logout">Log out</button></form>
     </form>
</body>

</html>

<?php
if (isset($_SESSION['username'])) {
     echo "<h3>The username \"" . $_SESSION['username'] . "\" is not yet logged out. Wait for them to log out.</h3>";

     if (isset($_POST['logout'])) {
          session_destroy();
          header("Location: login.php");
          exit();
     }
} else {
     if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

          $_SESSION['username'] = $username;
          $_SESSION['hashedPassword'] = $hashedPassword;

          echo "<h3>Logged in successfully</h3>";
          echo "Username: " . $username . "<br>";
          echo "Hashed Password: " . $hashedPassword . "<br>";
     }
}
?>