<?php include_once("crud_user.php"); ?>
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="admin_users.css" />
    <title>Admin Dasboard</title>
  </head>

  <body>
    <form name="form1" method="post" action="">


      <div class="box">
        <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;">Welcome To LMC E-library</h1>


        <h3 style="color:white;text-shadow: 2px 2px 5px black">Add Users to Database<h3>


      </div>



      <div class="nav">
        <ul>
        <li><a  href="admin_home.php">Home</a></li>
          <li><a style="background-color: orange" href="admin_users.php">All Users</a></li>
          <li><a href="add_user.php">Add User</a></li>
          <li><a href="admin_aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <br><br>




      <input type="text" placeholder="search by name,ID,department or user type" name="search" id="search-bar" />
      <input type="submit" class="search-button" name="searchbtn" value="search">
      <p style="text-align:center;color:#4B0082;text-shadow:2px 2px 5px white;font-weight:bold;position:relative;top:10px;letter-spacing:3px;font-size:18px;">ALL USERS</p>
      <div class="main">
        <?php if (isset($_POST['searchbtn'])) {
          $results = mysqli_query($conn, "SELECT * FROM user_record where `User_id` like('%$_POST[search]%') or `User_Name` like('%$_POST[search]%') or `type` like('%$_POST[search]%') or `Department` like('%$_POST[search]%')");
        ?>
      <table>
            <tr>
              <th>User Id</th>
              <th>User Name</th>
              <th>User Type</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['User_id']; ?></td>
                <td><?php echo $row['User_Name']; ?></td>
                <td><?php echo $row['Type']; ?></td>
                <td><?php echo $row['Department']; ?></td>
                <td><?php echo $row['Semester']; ?></td>

                <td> <a href="autofilluser_edit.php?edit=<?php echo $row['User_id']; ?>" style="color:green">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>

                <td><a href="crud_user.php?del=<?php echo $row['User_id']; ?>" style="color:red;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a></td>
                  </a></td>

              </tr>
            <?php } ?>
          </table>


        <?php } else { ?>



          <?php $results = mysqli_query($conn, "SELECT * FROM User_record"); ?>
          <table>
          <tr>
              <th>User Id</th>
              <th>User Name</th>
              <th>User Type</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
              <td><?php echo $row['User_id']; ?></td>
                <td><?php echo $row['User_Name']; ?></td>
                <td><?php echo $row['Type']; ?></td>
                <td><?php echo $row['Department']; ?></td>
                <td><?php echo $row['Semester']; ?></td>

                <td> <a href="autofilluser_edit.php?edit=<?php echo $row['User_id']; ?>" style="color:green">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>

                <td><a href="crud_user.php?del=<?php echo $row['User_id']; ?>" style="color:red;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a></td>
                  </a></td>

              </tr>
            <?php } ?>
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