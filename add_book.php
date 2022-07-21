<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="add_book.css" />
  <title>Add_Book</title>
</head>

<body>
  <div class="box">

    <br>
    <h1 style="color:white;text-shadow: 2px 2px 5px black;  ">Welcome To LMC E-library</h1>


    <h3 style="color:white;text-shadow: 2px 2px 5px black">Add Books to Database<h3>

  </div>
  <div class="nav">
    <ul>
      <li><a href="admin_books.php"><b>Home</b></a></li>
      <li><a href="add_book.php" style="background-color:orange"><b>Add Book</b></a></li>

      <li><a href="admin_aboutus.php"><b>About us</b></a></li>
      <li><a href="logout.php"><b>Logout</b></a></li>
    </ul>
    <br><br><br>
  </div>

  <form action="crud.php" method="POST" enctype="multipart/form-data">
    <div class="header">


      <div class="container">
        <div class="title">
          <h2>ADD BOOK</h2>
        </div>

        <table style="color:#FFFFFF;padding-top:5px;">

          <br>
          <tr>
            <td>BOOK ID:</td>
            <td><input type="text" name="book_id" placeholder="books ID" autocomplete="on" required /></td>
          </tr>
          <tr>
            <td>BOOK NAME:</td>
            <td><input type="text" name="booksname" placeholder="books name" required /></td>
          </tr>

          <tr>
            <td>COVER:</td>
            <td><input type="file" name="cover" /></td>
          </tr>

          <tr>
            <td>AUTHOR NAME:</td>
            <td><input type="text" name="authorname" placeholder="books author name" required /></td>
            <!-- <td style="color:red;font-weight:bold;text-align:center"></td> -->
          </tr>

          <tr>
            <td>PUBLICATION:</td>
            <td><input type="text" name="pub" placeholder="publication name" required /></td>
          </tr>
          <TR>
            <td>DEPARTMENT:</td>
            <td>
              <select name="dept" required>
                <option value="none">--CHOOSE DEPARTMENT--</option>
                <option value="A">Computer Science</option>
                <option value="B">Textile Technology</option>
                <option value="C">Mechanical</option>
                <option value="D">Electrical</option>
              </select>

            </td>
          </TR>
          <tr>
            <td>COURSE:</td>
            <td><input type="text" name="course" placeholder="BCA,MCA,BSc,etc." required /></td>
          </tr>
          <tr>
            <td>SEMESTER:</td>
            <td><input type="number" name="sem" placeholder="semester" max="8" min="1" required /></td>
          </tr>

          </tr>

          <tr>
            <td>UPLOAD EBOOK:</td>
            <td><input type="file" name="book" required /></td>
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