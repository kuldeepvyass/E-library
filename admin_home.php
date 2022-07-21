<?php include_once("crud.php"); ?>
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="admin_home.css" />
    <title>Admin Dasboard</title>
  </head>

  <body>
    <form name="form1" method="post" action="">


      <div class="box">
        <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;">Welcome To LMC E-library</h1>

      </div>
    <div class="nav">
        <ul>
          <li><a style="background-color: orange" href="admin_home.php">Home</a></li>
          <li><a href="admin_aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <br><br>  
      <p style="text-align:center;color:#4B0082;text-shadow:2px 2px 5px white;font-weight:bold;position:relative;top:10px;letter-spacing:3px;font-size:22px;">dATABASE MANAGEMENT</p>
      <div style="width: 80%;border-radius: 20px;overflow: auto;margin-left: 10%; margin-top: 1%; height: 350px;background: rgba(0, 0, 0, 0.57);">    
          
         <h2 style="color:yellowgreen; text-align: center;"> USER MANAGEMENT</h2><br>


  <h2 style="text-align: center"><a style="color:white;" href="admin_users.php" >click here to access user database</a></h2>
  <br><br><br><br>
  <h2 style="color:yellowgreen; text-align: center;">BOOKS MANAGEMENT</h2><br>
  <h2 style="text-align: center"><a style="color:white;" href="admin_books.php" >click here to access books database</a></h2>
  <br><br><br><br>
  <h2 style="color:yellowgreen; text-align: center;">QUERIES OF STUDENT</h2><br>
  <h2 style="text-align: center"><a style="color:white;" href="admin_query.php" >click here to see all queries</a></h2>

</div> 

  <div style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:84%; height:40px; margin-left:9%; margin-top:20px;text-align:center;">
        <h2 style="line-height:1px;position:relative;top:20px;">Thank You.</h2>
 </div>

    </form>
  </body>

  </html>