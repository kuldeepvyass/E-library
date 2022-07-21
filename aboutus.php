<?php include_once("crud.php"); ?>
<html>

<head>
  <title>About Us</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: url("lg3.jpeg");
      height: 170%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
    }

    input {
      border-radius: 5px;
      border-color: #FFFFFF;
    }

    input::placeholder {
      color: #aaa;
      font-weight: 500;
    }

    .box {
      width: 74%;
      height: 150px;
      background-size: cover;
      margin-left: 13%;
      opacity: .9;
      text-align: center;

    }

    .boxtwo {
      background-image: url("lg3.jpeg");
      background-size: cover;
      box-shadow: 0px 0px 15px lightgreen;
      border-radius: 12px;

    }

    ul {
      padding: 0;
      list-style: none;
    }

    ul li {
      float: left;
      width: 350px;
      height: 40px;
      background-color: purple;
      opacity: .8;
      line-height: 40px;
      text-align: center;
      font-size: 20px;
      margin-right: 5px;
    }

    ul li a {
      text-decoration: none;
      color: white;
      display: block;
    }

    ul li a:hover {
      background-color: green;
    }

    ul li ul li {
      display: none;
    }

    ul li:hover ul li {
      display: block;

    }

    .nav {
      padding-left: 13%;

    }

    .three {
      margin-left: 60%;
      margin-top: 5px;
      box-shadow: 0px 0px 15px green;
    }

    td {
      text-align: center;
    }
  </style>


</head>

<body>

  <div class="box">
    <br>
    <h1 style="color:white;text-shadow: 2px 2px 5px black;">Welcome To LMC E-library</h1>




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

      <li><a style="background-color: green" href="aboutus.php">ABOUT US</a>
      </li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
    <br><br>
  </div>


  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:750px; margin-left:10%;margin-top:10px;background-color:white">

    <h1 style="color:yellow;text-align:center;background:rgba(255, 255, 255, 0.24)">ABOUT OUR LMC E-LIBRARY PROJECT </h1>
    <P style="color:white;text-align:center;width:81%;font-weight:bold;margin-left
:10%;background:rgba(0, 0, 0, 0.5);border-radius:10px;padding:3%;font-size:15px">This project is the prototype of a Simple Library Management System. Librarian has a provision to add book details like ID number, book title, author name, through the web page. In addition to this, librarian or any user has a provision to search for the available books in the library by the book id or book Name. If book details are present in the database, the search details are displayed on the web page.Student can request the librarian for getting the book via this web.Student can easily read any book on this portal</P>


    <h2 style="color:#000000;text-align:center;background:rgba(255, 255, 255, 0.82)"> Group Members </h2>
    <div style="color:white;text-align:center;width:81%;font-weight:bold;margin-left
:10%;background:rgba(0, 0, 0, 0.5);border-radius:10px;font-size:15px;">

      <tr>
        <td><br /></td>
        <td>1. Kuldeep Vyas </td>
        <td><br /></td>
        <td> Role = ( UI Developer )
          <br>Mail-ID : vyask@gmail.com
        </td>
        <td><br /></td>
      </tr>

      <br />
      <hr>


      <tr>
        <td><br /></td>
        <td>2. Kusum Pareek</td>
        <td><br /></td>
        <td>Role = ( Backend Developer )<br>Mail-ID : kusumpareek7620@gmail.com</td>
        <td><br /></td>
      </tr>

      <br />
      <hr>


      <tr>
        <td><br /></td>
        <td>3.Kritika Gajja </td>
        <td><br /></td>
        <td>Role = (Report Manager)<br>Mail-ID : kritikagajja09@gmail.com </td>
        <td><br /></td>
      </tr>

      <br />
      <hr>


      <tr>
        <td><br /></td>
        <td>4. Himanshi Bhati</td>
        <td><br /></td>
        <td>Role = (DFD Analyst)<br>Mail-ID : bhatihimanshi5@gmail.com</td>
        <td><br /></td>
      </tr>

      <br />
      <hr>

    </div>
    <div style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:84%; height:40px; margin-left:10%; margin-top:15px">
      <h2 align="center"> Thank You </h2>


    </div>


  </div>





</body>

</html>