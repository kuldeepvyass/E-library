<?php include_once("crud.php"); ?>
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="query.css" />


    <title>student Dasboard</title>
  </head>

  <body>
    <form name="form1" method="post" action="crud.php">
      <div class="box">
        <br>
        <h1>Welcome To LMC E-library</h1>
      </div>

      <div class="nav">
        <ul>
        <?php $results = mysqli_query($conn, "SELECT * FROM user_record where User_id='$_SESSION[uid]'");
        while ($row = mysqli_fetch_array($results)) {  ?>
          
        <?php if ($row['Type'] == 'TEACHER') :  ?>
          <li><a href="teacher.php">HOME</a></li>
        <?php endif ?>
        <?php if ($row['Type'] == 'STUDENT') :  ?>
          <li><a href="student.php">HOME</a></li>
        <?php endif ?>
        <?php
      }
      ?>
          <li><a style="background-color: orange" href="query_page.php">Write a query</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <br><br>


      <?php $results = mysqli_query($conn, "SELECT User_Name FROM user_record WHERE User_id='$_SESSION[uid]'"); ?>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
        <p>Welcome <?php echo $row['User_Name'];
                  } ?></p>
        <div class="search-area">
        <textarea type="text" placeholder="Typeyour query here..." name="query" id="query-bar" required></textarea>
      <input type="submit" class="send-query" name="send" value="SEND">
      </div>
      <div class="chatbot-area">
          <a href="bot.php">Try using our chatbot for instant replies.</a>
      </div>
        
        <footer class="footer">
          <h2>Thank You.</h2>
        </footer>

    </form>
  </body>

  </html>