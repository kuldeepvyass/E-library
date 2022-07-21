<?php include_once("crud.php"); ?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="teacher.css" />


  <title>teacher Dasboard</title>
</head>

<body>
  <form name="form1" method="post" action="">
    <div class="box">
      <br>
      <h1>Welcome To LMC E-library</h1>
      <h4>You are logged in as teacher</h4>
    </div>

    <div class="nav">
      <ul>
        <li><a style="background-color: orange" href="teacher.php">Home</a></li>
        <li><a href="query_page.php">Write a query</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <br><br>


    <input type="text" placeholder="search by author,book name,department or publication" name="search" id="search-bar" />
    <input type="submit" class="search-button" name="searchbtn" value="search">
    <?php $results = mysqli_query($conn, "SELECT User_Name FROM user_record WHERE User_id='$_SESSION[uid]'"); ?>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <p>Welcome <?php echo $row['User_Name'];
                } ?></p>
      <div class="main">
        <?php if (isset($_POST['searchbtn'])) {
          $query = "SELECT * FROM books_record INNER JOIN user_record ON  User_id='$_SESSION[uid]' AND user_record.Department=books_record.Course WHERE Book_name LIKE('%$_POST[search]%') OR AuthOR LIKE('%$_POST[search]%') OR Publication LIKE('%$_POST[search]%') OR Category LIKE('%$_POST[search]%')";
          $results = mysqli_query($conn, $query); ?>
          <table>
            <tr>
              <th>No.</th>
              <th>Book cover</th>
              <th>Book name</th>
              <th>Book writer</th>
              <th>Publication</th>
              <th>Department</th>
              <th>View book</th>
            </tr>
            <?php if (mysqli_num_rows($results) < 1) {
              echo "<tr colspan='7'><td id='no-books'>NO BOOKS AVAILABLE<td>";
            } else {
              $num = 1; ?> <tr>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                  <td><?php echo $num . "."; ?></td>
                  <td><img src="<?php echo $row['Cover']; ?>" height="60px" weidth="70px"></img></td>
                  <td><?php echo $row['Book_name']; ?></td>
                  <td><?php echo $row['Author']; ?></td>
                  <td><?php echo $row['Publication']; ?></td>
                  <td><?php echo $row['Category']; ?></td>
                  <td> <a href="crud.php?view=<?php echo $row['Book_id']; ?>" style="color:white;">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a></td>

              </tr>

          <?php
                  $num += 1;
                }
              } ?>

        <?php } else {
        ?>
          <table>
            <tr>
              <th>No.</th>
              <th>Book cover</th>
              <th>Book name</th>
              <th>Book writer</th>
              <th>Publication</th>
              <th>Department</th>
              <th>View book</th>
            </tr>


            <?php
            $query = "SELECT * FROM books_record INNER JOIN user_record ON User_id='$_SESSION[uid]' AND user_record.Department=books_record.Course";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) < 1) {
              echo  "<tr colspan='7'><td id='no-books'>NO BOOKS AVAILABLE<td>";
            } else {
              $num = 1; ?> <tr>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                  <td><?php echo $num . "."; ?></td>
                  <td><img src="<?php echo $row['Cover']; ?>" height="60px" weidth="70px"></img></td>
                  <td><?php echo $row['Book_name']; ?></td>
                  <td><?php echo $row['Author']; ?></td>
                  <td><?php echo $row['Publication']; ?></td>
                  <td><?php echo $row['Category']; ?></td>
                  <td> <a href="crud.php?view=<?php echo $row['Book_id']; ?>" style="color:white">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a></td>

              </tr>

        <?php
                  $num += 1;
                }
              }
            } ?>
          </table>
      </div>
      <div class="footer">
        <h2>Thank You.</h2>
      </div>

  </form>
</body>

</html>