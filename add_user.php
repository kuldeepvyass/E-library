<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="add_book.css" />
  <title>Add_user</title>
</head>

<body>
  <div class="box">

    <br>
    <h1 style="color:white;text-shadow: 2px 2px 5px black;  ">Welcome To LMC E-library</h1>


    <h3 style="color:white;text-shadow: 2px 2px 5px black">Add User to Database<h3>

  </div>
  <div class="nav">
    <ul>
      <li><a href="admin_users.php"><b>Home</b></a></li>
      <li><a href="add_User.php" style="background-color:orange"><b>Add User</b></a></li>

      <li><a href="admin_aboutus.php"><b>About us</b></a></li>
      <li><a href="logout.php"><b>Logout</b></a></li>
    </ul>
    <br><br><br>
  </div>

  <form action="crud_user.php" method="POST" enctype="multipart/form-data">
    <div class="header">


      <div class="container">
        <div class="title">
          <h2>ADD USER</h2>
        </div>

        <table style="color:#FFFFFF;padding-top:5px;">

          <br>
          <tr>
            <td>USER ID:</td>
            <td><input type="text" name="User_id" placeholder="User ID" autocomplete="on" required /></td>
          </tr>
          <tr>
            <td>USER NAME:</td>
            <td><input type="text" name="User_name" placeholder="user name" required /></td>
          </tr>

          <tr>
            <td>USER TYPE:</td>
            <td><input type="text" name="Type" placeholder="User Type" required /></td>
            <!-- <td style="color:red;font-weight:bold;text-align:center"></td> -->
          </tr>

          <tr>
            <td>PASSWORD:</td>
            <td><input type="text" name="Password" placeholder="password" required /></td>
          </tr>
          <TR>
            <td>DEPARTMENT:</td>
            <td>
            <input type="text" name="Department" placeholder="Department" required /></td>

            </td>
          </TR>
         
          <tr>
            <td>SEMESTER:</td>
            <td><input type="number" name="Semester" placeholder="semester" max="8" min="1" required /></td>
          </tr>

          </tr>
          <tr>
            <td>E-MAIL:</td>
            <td><input type="email" name="Email" placeholder="E-mail ID" required /></td>
          </tr>

          </tr>

       
          <tr>
            <td>
              <h2><input style="margin-left:180%;" type="submit" name="sub" value="SUBMIT" /></h2>
            </td>
          </tr>
        </table>
      </div>
      </div>
  </form>
  
  
</body>

</html>