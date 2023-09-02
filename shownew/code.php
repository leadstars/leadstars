<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM newreg WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $average = mysqli_real_escape_string($con, $_POST['average']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $representative = mysqli_real_escape_string($con, $_POST['representative']);
    $representative_name = mysqli_real_escape_string($con, $_POST['representative_name']);
    $representative_number = mysqli_real_escape_string($con, $_POST['representative_number']);
    $family_number = mysqli_real_escape_string($con, $_POST['family_number']);
    $previous_grade = mysqli_real_escape_string($con, $_POST['previous_grade']);
    $promoted_to = mysqli_real_escape_string($con, $_POST['promoted_to']);

    $query = "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', age='$age', average='$average', email='$email', password='$password', representative='$representative', representative_name='$representative_name', representative_number='$representative_number', family_number='$family_number', previous_grade='$previous_grade', promoted_to='$promoted_to' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $average = mysqli_real_escape_string($con, $_POST['average']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $representative = mysqli_real_escape_string($con, $_POST['representative']);
    $representative_name = mysqli_real_escape_string($con, $_POST['representative_name']);
    $representative_number = mysqli_real_escape_string($con, $_POST['representative_number']);
    $family_number = mysqli_real_escape_string($con, $_POST['family_number']);
    $previous_grade = mysqli_real_escape_string($con, $_POST['previous_grade']);
    $promoted_to = mysqli_real_escape_string($con, $_POST['promoted_to']);

    $query = "INSERT INTO users (firstname,middlename,lastname,age,average,email,password,representative,representative_name,representative_number,family_number,previous_grade,promoted_to) VALUES ('$firstname','$middlename','$lastname','$age','$average','$email','$password','$representative','$representative_name','$representative_number','$family_number','$previous_grade','$promoted_to')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>