<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "elibrary") or die("Database Error");

$User_id = "";
$User_name = "";
$Type = "";
$Password = "";
$Department = "";
$Semester = 0;
$Email = "";
//INSERT RECORD USER
if (isset($_POST['sub'])) {
    $User_id = $_POST['User_id'];
    $User_name = $_POST['User_name'];
    $Type = $_POST['Type'];
    $Password = $_POST['Password'];
    $Department= $_POST['Department'];
    $Semester = $_POST['Semester'];
    $Email = $_POST['Email'];
 
  $query = "INSERT INTO user_record(`User_id`,`User_Name`,`Type`,`Password`,`Department`,`Semester`,`E-mail`) VALUES ('$User_id','$User_name','$Type','$Password','$Department','$Semester','$Email')";

  if (mysqli_query($conn, $query)) {
    $flag = 2;
    //echo "INSERTION SUCCESSFUL";
    echo "<script type = 'text/javascript'>window.location='insertionuser_success.php';</script>";
  } else {
    echo "Could not insert " . mysqli_error($conn);
  }
}


//DELETE RECORD user
if (isset($_GET['del'])) {
  $User_id = $_GET['del'];
  $query = "DELETE FROM user_record WHERE  User_id = '$User_id'";
  if (mysqli_query($conn, $query)) {
    //echo "Deletion successful.<BR>";
    echo "<script type = 'text/javascript'>window.location='deletionuser_success.php';</script>";
  } else {
    echo "Could not delete " . mysqli_error($conn);
  }
}


//EDIT RECORDS user

if (isset($_POST['edit'])) {

  $User_id = $_POST['User_id'];
  $User_name = $_POST['User_name'];
  $Type = $_POST['Type'];
  $Password = $_POST['Password'];
  $Department= $_POST['Department'];
  $Semester = $_POST['Semester'];
  $Email = $_POST['E-mail'];
  $query = "UPDATE user_record SET `User_Name`='$User_name',`Type` = '$Type',`Password` = '$Password', `Department` = '$Department',`Semester` = '$Semester',`E-mail` = '$Email'  WHERE `User_id`='$User_id'";
 
  if (mysqli_query($conn, $query)) {
    //echo "Update successful";
    echo "<script type = 'text/javascript'>window.location='updationuser_success.php';</script>";
  } else {
    echo "Could not update " . mysqli_error($conn);
  }
}


//SEND QUERY FOR STUDENT AND TEACHER
if (isset($_POST['send'])) {
  //if($_POST['send']!=NULL)

  $type_result = mysqli_query($conn, "SELECT Type FROM user_record WHERE User_id='$_SESSION[uid]'");
  while ($row = mysqli_fetch_array($type_result)) {
    $type = $row['Type'];
  }

  $s_query = $_POST['query'];
  $query = "INSERT INTO queries(query, from_type) VALUES ('$s_query','$type')";

  if (mysqli_query($conn, $query)) {
    echo "<script type = 'text/javascript'>alert('Your query has been sent successfully.');
      window.location='query_page.php';
      </script>";
  } else {
    echo "Could not insert " . mysqli_error($conn);
  }
}
