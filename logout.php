<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="logout.css">
</head>

<body>

  <div class="container">
    <div>
      <img src="logo.jpeg" class="logo-lmc" alt="" />
    </div>
    <div>
      <img src="sign-up.png" class="sign-up" alt="" />
    </div>
  </div>
</body>

</html>
<?php

session_start();
unset($_SESSION['uid']);
echo "<h3>You have been successfully logged out!!</h3>";

?>

<a href="index.php">Login again?</a>