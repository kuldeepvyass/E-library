<?php include_once("crud.php"); ?>
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="admin_books.css" />
    <title>Admin Dasboard</title>
  </head>

  <body>
    <form name="form1" method="post" action="">


      <div class="box">
        <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;">Welcome To LMC E-library</h1>


        <h3 style="color:white;text-shadow: 2px 2px 5px black">Add Books to Database<h3>


      </div>



      <div class="nav">
        <ul>
        <li><a  href="admin_home.php">Home</a></li>
          <li><a style="background-color: orange" href="admin_books.php">All Books</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="admin_aboutus.php">About us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <br><br>




      <input type="text" placeholder="search by author,book name,department or publication" name="search" id="search-bar" />
      <input type="submit" class="search-button" name="searchbtn" value="search">
      <p style="text-align:center;color:#4B0082;text-shadow:2px 2px 5px white;font-weight:bold;position:relative;top:10px;letter-spacing:3px;font-size:18px;">ALL BOOKS</p>
      <div class="main">
        <?php if (isset($_POST['searchbtn'])) {
          $results = mysqli_query($conn, "SELECT * FROM books_record where Book_name like('%$_POST[search]%') or Author like('%$_POST[search]%') or Publication like('%$_POST[search]%') or Category like('%$_POST[search]%')");
        ?>

          <table>
            <tr>
              <th>Book ID</th>
              <th>Book Name</th>
              <th>Book Writer</th>
              <th>Publication</th>
              <th>Department</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>View book</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['Book_id']; ?></td>
                <td><?php echo $row['Book_name']; ?></td>
                <td><?php echo $row['Author']; ?></td>
                <td><?php echo $row['Publication']; ?></td>
                <td><?php echo $row['Category']; ?></td>

                <td> <a href="autofill_edit.php?edit=<?php echo $row['Book_id']; ?>" style="color:green">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>

                <td><a href="crud.php?del=<?php echo $row['Book_id']; ?>" style="color:red;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a></td>

                <td> <a href="crud.php" style="color:white">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a></td>

              </tr>
            <?php } ?>
          </table>


        <?php } else { ?>



          <?php $results = mysqli_query($conn, "SELECT * FROM books_record"); ?>
          <table>
            <tr>
              <th>Book ID</th>
              <th>Book Name</th>
              <th>Book Writer</th>
              <th>Publication</th>
              <th>Department</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>View book</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['Book_id']; ?></td>
                <td><?php echo $row['Book_name']; ?></td>
                <td><?php echo $row['Author']; ?></td>
                <td><?php echo $row['Publication']; ?></td>
                <td><?php echo $row['Category']; ?></td>

                <td> <a href="autofill_edit.php?edit=<?php echo $row['Book_id']; ?>" style="color:green;text-shadow:2px 2px 2px black">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>

                <td><a href="crud.php?del=<?php echo $row['Book_id']; ?>" style="color:red;text-shadow:2px 2px 2px black">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
                  </td>

                <td> <a href="crud.php?view=<?php echo $row['Book_id']; ?>" style="color:white;text-shadow:2px 2px 2px black">
                    <i class="fa fa-eye" aria-hidden="true"></i>
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