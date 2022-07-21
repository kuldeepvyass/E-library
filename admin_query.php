<?php include_once("crud.php"); ?>
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="admin_query.css" />
    <title>Admin Dasboard</title>
  </head>

  <body>
    <form name="form1" method="post" action="">


      <div class="box">
        <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;">Welcome To LMC E-library</h1>


        <h3 style="color:white;text-shadow: 2px 2px 5px black">QUERIES<h3>


      </div>



      <div class="nav">
        <ul>
        <li><a  href="admin_home.php">Home</a></li>
          <li><a style="background-color: orange" href="admin_query.php">All Queries</a></li>
          <li><a href="admin_aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <br><br>




      <input type="text" placeholder="search query" name="search" id="search-bar" />
      <input type="submit" class="search-button" name="searchbtn" value="search">
      <p style="text-align:center;color:#4B0082;text-shadow:2px 2px 5px white;font-weight:bold;position:relative;top:10px;letter-spacing:3px;font-size:18px;">ALL QUERIES</p>
      <div class="main">
        <?php if (isset($_POST['searchbtn'])) {
          $results = mysqli_query($conn, "SELECT * FROM queries where query like('%$_POST[search]%')");
        ?>

          <table>
            <tr>
              <th>No.</th>
              <th>QUERY</th>
              <th>USER-TYPE</th>
              
            </tr>
            <?php  $num = 1; ?>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                
              <tr>
                <td><?php echo  $num . "."; ?></td>
                <td><?php echo $row['query']; ?></td>
                <td><?php echo $row['from_type']; ?></td>
    
              </tr>
            <?php  $num += 1; } ?>
          </table>


        <?php } else { ?>



          <?php $results = mysqli_query($conn, "SELECT * FROM queries"); ?>
          <table>
            <tr>
              <th>No.</th>
              <th>QUERY</th>
              <th>USER-TYPE</th>
              
            </tr>
            <?php  $num = 1; ?>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                
              <tr>
                <td><?php echo  $num . "."; ?></td>
                <td><?php echo $row['query']; ?></td>
                <td><?php echo $row['from_type']; ?></td>
                 </tr>
            <?php  $num += 1; } ?>
          </table>
        <?php } ?>
      </div>


      </div>

      <div style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:84%; height:40px; margin-left:9%; margin-top:15px;text-align:center;">
        <h2 style="line-height:1px;position:relative;top:20px;">Thank You.</h2>


      </div>

    </form>
  </body>

  </html>