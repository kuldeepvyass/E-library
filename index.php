<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.clodflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <link rel="stylesheet" href="signin.css" />
  <title>Sign in & Sign up Form</title>
 </head>

 <body>
  <div class="container">
   <div class="forms-container">
    <div class="signin-signup">
     <form action="login_page.php" method="POST" class="sign-in-form">
      <h2 class="title">Sign in</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text"  id="uid" name="user-id" placeholder="Username" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" id="pswd" name="pass" placeholder="Password" />
      </div>
      <input class="btn solid" type="submit" name="submit" value="Login" />
      <p class="social-text">Or Sign in with social platforms</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3> <img src="logo.jpeg"  class="image2" alt="logo" /></h3>
      <H3   >
        LACHOO MEMORIAL COLLEGE  OF SCIENCE AND TECHNOLOGY
       </H3>
    
     </div>
     <img src="undraw_reading_time_gvg0.svg" width="100%" alt="sign-in-image" />
    </div>
   
   </div>
  </div>
  <script src="app.js"></script>
 </body>
</html>
<?php
if (isset($_SESSION['un'])) {
    $userid = $_SESSION['uid'];
    $password = $_SESSION['pass'];
    echo '<script type = "text/javascript"> document.getElementById("uid").value ="' . $userid . '"; </script> ';
    echo '<script type = "text/javascript"> document.getElementById("pswd").value ="' . $password . '"; </script> ';
}
?>