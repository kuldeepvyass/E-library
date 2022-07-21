  <?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "elibrary") or die("Database Error");

$book_id = "";
$book_name = "";
$cover = "";
$author = "";
$publication = "";
$category_key = "";
$category_val = "";
$course = "";
$sem = 0;
$file_link = "";
$flag = 0;

//INSERT RECORD BOOK
if (isset($_POST['sub'])) {
  $book_id = $_POST['book_id'];
  $book_name = $_POST['booksname'];
  $cover = ($_FILES['cover']['name']);
  $author = $_POST['authorname'];
  $publication = $_POST['pub'];
  $category = array(
    "A" => "Computer Science",
    "B" => "Textile Technology",
    "C" => "Mechanical",
    "D" => "Electrical"
  );
  $category_key = $_POST['dept'];
  $category_val = $category[$category_key];
  $course = $_POST['course'];
  $sem = $_POST['sem'];
  $file_link = ($_FILES['book']['name']);

  $query = "INSERT INTO books_record(Book_id, Book_name, Cover, Author, Publication, Category, Course,Sem, File_link) VALUES ('$book_id','$book_name','$cover','$author','$publication','$category_val','$course',$sem,'$file_link')";

  if (mysqli_query($conn, $query)) {
    $flag = 1;
    //echo "INSERTION SUCCESSFUL";
    echo "<script type = 'text/javascript'>window.location='insertion_success.php';</script>";
  } else {
    echo "Could not insert " . mysqli_error($conn);
  }
}


//DELETE RECORD BOOK
if (isset($_GET['del'])) {
  $book_id = $_GET['del'];
  $query = "DELETE FROM books_record WHERE  Book_id = '$book_id'";
  if (mysqli_query($conn, $query)) {
    //echo "Deletion successful.<BR>";
    echo "<script type = 'text/javascript'>window.location='deletion_success.php';</script>";
  } else {
    echo "Could not delete " . mysqli_error($conn);
  }
}


//EDIT RECORDS BOOK

if (isset($_POST['edit'])) {

  $book_id = $_POST['book_id'];
  $book_name = $_POST['booksname'];
  $cover = ($_FILES['cover']['name']);
  $author = $_POST['authorname'];
  $publication = $_POST['pub'];
  $category = array(
    "A" => "Computer Science",
    "B" => "Textile Technology",
    "C" => "Mechanical",
    "D" => "Electrical"
  );
  $category_key = $_POST['dept'];
  $category_val = $category[$category_key];
  $sem = $_POST['sem'];
  $file_link = ($_FILES['book']['name']);
  $query = "UPDATE books_record SET Book_name='$book_name',Cover='$cover',Author='$author',Publication='$publication',Category='$category_val',Sem=$sem,File_link='$file_link' WHERE Book_id='$book_id'";
  if (mysqli_query($conn, $query)) {
    //echo "Update successful";
    echo "<script type = 'text/javascript'>window.location='updation_success.php';</script>";
  } else {
    echo "Could not update " . mysqli_error($conn);
  }
}

//VIEW BOOK

if (isset($_GET['view'])) {

  $book_id = $_GET['view'];

  $query = "SELECT * FROM books_record WHERE Book_id= '$book_id'";

  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_array($result)) {

      $filename = $row['File_link'];

      header('Content-type:application/pdf');
      header('Content-Disposition: inline : filename = "' . $filename . '"');
      header('Content-Transfer-Encoding:binary');
      header('Accept-Ranges:bytes');
      @readfile($filename);
    }
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
