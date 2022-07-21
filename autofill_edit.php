<?php include_once("crud.php"); 

if (isset($_GET['edit']))
{ 	

	$book_id = $_GET['edit'];
														
	$query ="SELECT * FROM books_record WHERE Book_id= '$book_id'"; 
	$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 1){
            
		while ($row = mysqli_fetch_array($result))
		{
			 $book_name=$row['Book_name'];
             $cover=$row['Cover'];
             $author=$row['Author'];
             $publication=$row['Publication'];
             $category=$row['Category'];
             $sem = $row['Sem'];
             $file=$row['File_link'];
		 } 
		
		}
		else{
			echo "Could not fetch data".mysqli_error($conn);
		}
		

 }

?>

<html>
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="autofill_edit.css" />
<title>Add_Book</title>
</head>
<body>
  <div class="box">
 
          <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;  " >Welcome To LMC E-library</h1>
      
      
        <h3 style="color:white;text-shadow: 2px 2px 5px black" >Add Books to Database<h3>
   
  </div>
<div class="nav">
<ul>
  <li><a href = "admin_books.php"><b>Home</b></a></li>
  <li ><a href = "add_book.php" ><b>Add Book</b></a></li>

    <li><a href = "aboutus.php"><b>About us</b></a></li>
  <li><a href = "logout.php"><b>Logout</b></a></li>
</ul>
<br><br><br>
</div>

<form action="crud.php" method="POST" enctype="multipart/form-data">
<?php $results = mysqli_query($conn, "SELECT * FROM books_record where Book_id='$book_id'"); ?>
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>EDIT DETAILS</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:5px;">
   
   <tr>
   <?php while ($row = mysqli_fetch_array($results)) { ?>
     <td>BOOK ID:</td>
     <td><input type="text" name="book_id" placeholder="books ID" value='<?php echo $row['Book_id'];?>' readonly/></td>
	</tr>
     <td>BOOK NAME:</td>
     <td><input type="text" name="booksname" placeholder="books name" value='<?php echo $row['Book_name']; ?>'/></td>
     </tr>
     <tr>
	  <td>COVER:</td>
	  <td><input type="file" name="cover" /><?php echo $row['Cover']; ?></td>
	</tr>
   
	<tr>
	  <td>AUTHOR NAME:</td>
	 <td><input type="text" name="authorname" placeholder="books author name" value='<?php echo $row['Author']; ?>'/></td>
        <td style="color:red;font-weight:bold;text-align:center"></td>
	</tr>
  
	<tr>
	  <td>PUBLICATION:</td>
	 <td><input type="text" name="pub" placeholder="publication name" value='<?php echo $row['Publication']; ?>'/></td>
	</tr>
  <tr>

   
   <tr>
	  <td>DEPARTMENT:</td>
	 <td>
	 <select name="dept">
     <option value="none">--CHOOSE DEPARTMENT--</option>
     <?php if ($row['Category'] == 'Computer Science') : ?>
	   <option value="A" selected>Computer science</option>
	   <option value="B">Textile Technology</option>
	   <option value="C">Mechanical</option>
	   <option value="D">Electrical</option>
       <?php endif ?>
       <?php if ($row['Category'] == 'Textile Technology') : ?>
	   <option value="A" >Computer science</option>
	   <option value="B"selected>Textile Technology</option>
	   <option value="C">Mechanical</option>
	   <option value="D">Electrical</option>
       <?php endif ?>
       <?php if ($row['Category'] == 'Mechanical') : ?>
	   <option value="A" >Computer Science</option>
	   <option value="B">Textile Technology</option>
	   <option value="C" selected>Mechanical</option>
	   <option value="D">Electrical</option>
       <?php endif ?>
       <?php if ($row['Category'] == 'Electrical') : ?>
	   <option value="A" >Computer science</option>
	   <option value="B">Textile Technology</option>
	   <option value="C">Mechanical</option>
	   <option value="D" selected>Electrical</option>
       <?php endif ?>
	   </select>
	   
	 </td>
   <tr>
   <tr>
  <td>COURSE:</td>
  <td><input type="text" name="course" placeholder="BCA,MCA,BSc,etc." value='<?php echo $row['Course']; ?>'/></td>
</tr>
	  <td>SEMESTER:</td>
	 <td><input type="number" name="sem" min="1" max="8" placeholder="semester" value='<?php echo $row['Sem']; ?>'/></td>
	</tr>
   
	</tr>

	<tr>
	 <td>UPLOAD EBOOK:</td>
	 <td><input type="file" name="book" /><?php echo $row['File_link']; ?></td>
	</tr>
      <tr>
	  <td><h2><input style="margin-left:180%;" type="submit" name="edit" value="EDIT"/></h2></td>
      <?php } ?>
	  </tr>
      
   </table>

 </form>
</div>
</div>
</body>
</html>
