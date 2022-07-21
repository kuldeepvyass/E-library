<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "elibrary") or die("Database Error");

//FOR STUDENT AND TEACHER
$userid = '';
$password = '';
$flag = 0;
$admin_flag = 0;
$user_type = '';

$query = "SELECT * FROM user_record";
$admin_query = "SELECT * FROM admin_record";

$result = mysqli_query($conn, $query);
$admin_result = mysqli_query($conn, $admin_query);

if (isset($_POST['submit'])) {
    $userid = $_POST['user-id'];
    $password = $_POST['pass'];

    while ($rows = mysqli_fetch_array($result)) {
        if (($userid == $rows['User_id']) && ($password == $rows['Password'])) {
            $flag = 1;
            $user_type = $rows['Type'];
        }
    }

    while ($rows = mysqli_fetch_array($admin_result)) {
        if (($userid == $rows['Admin_id']) && ($password == $rows['Password'])) {
            $admin_flag = 1;
        }
    }

    if ($flag == 1) {
        if ($user_type == 'STUDENT') {
            //STUDENT HOME PAGE REDIRECT
            echo "<script type = 'text/javascript'>window.location='student.php';</script>";
        }
        if ($user_type == 'TEACHER') {
            //TEACHER HOME PAGE REDIRECT	
            echo "<script type = 'text/javascript'>window.location='teacher.php';</script>";
        }
    } elseif ($admin_flag == 1) {
        //ADMIN HOME PAGE REDIRECT
        echo "<script type = 'text/javascript'>window.location='admin_home.php';</script>";
    } else {
        include('failLogin.html');
    }
}



//REMEMBER MY INFO

if (isset($_POST['submit'])) {
    $userid = $_POST['user-id'];
    //$password = $_POST['pass'];
    $_SESSION['uid'] = $userid;
    //$_SESSION['pass'] = $password;
}
