<?php
session_start();
require 'config/database.php';

// get register form data if register button was clicked
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $middlename = filter_var($_POST['middlename'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $id_number = filter_var($_POST['id_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $representative = filter_var($_POST['representative'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $representative_name = filter_var($_POST['representative_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $representative_number = filter_var($_POST['representative_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $family_number = filter_var($_POST['family_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $previous_grade = filter_var($_POST['previous_grade'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promoted_to = filter_var($_POST['promoted_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $average = filter_var($_POST['average'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $profile = $_FILES['profile'];
    $slipt = $_FILES['slipt'];
    $card = $_FILES['card'];

    // validate input values
    if (!$firstname) {
        $_SESSION['register'] = "Please enter your First Name!";
    } elseif (!$profile['name']) {
        $_SESSION['register'] = "Please select your image!";
    } elseif (!$slipt['name']) {
        $_SESSION['register'] = "You Have To Enter Your Paid Slipt Image";
    } elseif (!$card['name']) {
        $_SESSION['register'] = "Please Enter Your Card!";
    } else {{
            // check if username or email already exist indatabase
            $user_check_query = "SELECT * FROM register WHERE id_number='$id_number' OR id_number='$id_number'";
            $user_check_result = mysqli_query($connection, $user_check_query);


            if (mysqli_num_rows($user_check_result) > 0) {
                    $_SESSION['register-data'] = $_POST;
                    header('location: ' . 'unsuccess.php');
                    die();
            } else {
                // WORK ON Profile
                $profile_name = $time . $profile['name'];
                $profile_tmp_name = $profile['tmp_name'];
                $profile_destination_path = 'profile/' . $profile_name;
                
                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'JPG', 'PNG', 'JPG', 'JPEG', 'jpeg'];
                $extention = explode('.', $profile_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    // make sure image is not too large (5mb+)
                    if ($profile['size'] < 3000000) {
                        // upload profile
                        move_uploaded_file($profile_tmp_name, $profile_destination_path);
                    } else {
                        $_SESSION['register-data'] = $_POST;
                        header('location: ' . 'imgerror.php');
                        die();
                    }
                } else {
                    $_SESSION['register-data'] = $_POST;
                    header('location: ' . 'imgerror1.php');
                    die();
                }
            }



            
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['register-data'] = $_POST;
                header('location: ' . '../unsuccess.php');
                die();
            } else {
                // WORK ON slipt
                $slipt_name = $time . $slipt['name'];
                $slipt_tmp_name = $slipt['tmp_name'];
                $slipt_destination_path = 'slipt/' . $slipt_name;
                
                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'JPG', 'PNG', 'JPG', 'JPEG', 'jpeg'];
                $extention = explode('.', $slipt_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    // make sure image is not too large (5mb+)
                    if ($slipt['size'] < 3000000) {
                        // upload slipt
                        move_uploaded_file($slipt_tmp_name, $slipt_destination_path);
                    } else {
                        $_SESSION['register-data'] = $_POST;
                        header('location: ' . 'imgerror.php');
                        die();
                    }
                } else {
                    $_SESSION['register-data'] = $_POST;
                    header('location: ' . 'imgerror1.php');
                    die();
                }
            }





            if (mysqli_num_rows($user_check_result) > 0) {
                header('location: ' . 'unsuccess.php');
                die();
            } else {
                // WORK ON Card
                $card_name = $time . $card['name'];
                $card_tmp_name = $card['tmp_name'];
                $card_destination_path = 'card/' . $card_name;
                
                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'JPG', 'PNG', 'JPG', 'JPEG', 'jpeg'];
                $extention = explode('.', $card_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    // make sure image is not too large (5mb+)
                    if ($card['size'] < 3000000) {
                        // upload card
                        move_uploaded_file($card_tmp_name, $card_destination_path);
                    } else {
                        $_SESSION['register-data'] = $_POST;
                        header('location: ' . 'imgerror.php');
                        die();
                    }
                } else {
                    $_SESSION['register-data'] = $_POST;
                    header('location: ' . 'imgerror1.php');
                    die();
                }
            }


        }
    }

    // redirect back to register page if there was any problem
    if (isset($_SESSION['register'])) {
        // pass form data back to register page
        $_SESSION['register-data'] = $_POST;
        header('location: ' . 'unsuccess.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO register SET firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender', representative='$representative', representative_name='$representative_name', representative_number='$representative_number', family_number='$family_number', previous_grade='$previous_grade', promoted_to='$promoted_to', age='$age', average='$average', email='$email', id_number='$id_number', profile='$profile_name', slipt='$slipt_name', card='$card_name'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);
        
        if (!mysqli_errno($connection)) {
            // redirect to Success page with success message
            $_SESSION['register-success'] = "Registration successful. please log in";
            header('location: ' . 'success.php');
            die();
        }
    }
} else {
    // if button wasn't clicked, bounce back to register page
    header('location: ' . 'register.php');
    die();
}
