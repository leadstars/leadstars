
<?php
// Assuming you have already established a database connection

require 'db_conn.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted ID number
  $id_number = $_POST['id_number'];

  // Query the database to fetch the student's result
  $query = "SELECT * FROM register WHERE id_number = '$id_number'";
  $result = mysqli_query($conn, $query);

  // Check if a matching record is found
  if (mysqli_num_rows($result) > 0) {
    // Fetch the student's result
    $studentResult = mysqli_fetch_assoc($result);

    // Store the result in a session variable
    $_SESSION['student_result'] = $studentResult;

    // Redirect the user to the result page
    header("Location: show.php");
    die();
  } else {
    // No matching record found, display an error message
    header("Location: incos.php");
    die();
  }
}
?>

