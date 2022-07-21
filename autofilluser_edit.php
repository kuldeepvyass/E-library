<?php include_once("crud_user.php"); 

if (isset($_GET['edit']))
{ 	
	
	$User_id = $_GET['edit'];
														
	$query ="SELECT * FROM user_record WHERE User_id= '$User_id'"; 
	$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 1){
            
		while ($row = mysqli_fetch_array($result))
		{
            $User_id = $row['User_id'];
            $User_name =$row['User_Name'];
            $Type = $row['Type'];
            $Password = $row['Password'];
            $Department= $row['Department'];
            $Semester = $row['Semester'];
            $Email = $row['E-mail'];
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
<title>Add_User</title>
</head>
<body>
  <div class="box">
 
          <br>
        <h1 style="color:white;text-shadow: 2px 2px 5px black;  " >Welcome To LMC E-library</h1>
      
      
        <h3 style="color:white;text-shadow: 2px 2px 5px black" >Edit Users to Database<h3>
   
  </div>
<div class="nav">
<ul>
  <li><a href = "admin_users.php"><b>Home</b></a></li>
  <li ><a href = "add_user.php" ><b>Add User</b></a></li>

    <li><a href = "admin_aboutus.php"><b>About us</b></a></li>
  <li><a href = "logout.php"><b>Logout</b></a></li>
</ul>
<br><br><br>
</div>

<form action="crud_user.php" method="POST" enctype="multipart/form-data">
<?php $results = mysqli_query($conn, "SELECT * FROM user_record where User_id='$User_id'"); ?>
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>EDIT DETAILS</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:5px;">
   
   <tr>
   <?php while ($row = mysqli_fetch_array($results)) { ?>
     <td>USER ID:</td>
     <td><input type="text" name="User_id" placeholder="user ID" value='<?php echo $row['User_id']; ?>' readonly/></td>
	</tr>
     <td>USER NAME:</td>
     <td><input type="text" name="User_name" placeholder="user name" value='<?php echo $row['User_Name']; ?>'/></td>
     </tr>
     <tr>
	  
   
	<tr>
	  <td>TYPE:</td>
	 <td><input type="text" name="Type" placeholder="user type" value='<?php echo $row['Type']; ?>'/></td>
        <td style="color:red;font-weight:bold;text-align:center"></td>
	</tr>
  
	<tr>
	  <td>PASSWORD:</td>
	 <td><input type="text" name="Password" placeholder="password" value='<?php echo $row['Password']; ?>'/></td>
	</tr>
  <tr>

   <tr>
   <tr>
  <td>DEPARTMENT:</td>
  <td><input type="text" name="Department" placeholder="Department" value='<?php echo $row['Department']; ?>'/></td>
</tr>
	  <td>SEMESTER:</td>
	 <td><input type="number" name="Semester" placeholder="semester" max="8" min="1" value='<?php echo $row['Semester']; ?>'/></td>
	</tr>
   
	</tr>
    
	<tr>
	 <td>E-MAIL:</td>
     <td><input type="text" name="E-mail" placeholder="E-mail id" value='<?php echo $row['E-mail']; ?>'/></td>
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
