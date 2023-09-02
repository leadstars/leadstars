<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['id_number'])) {

 ?>

<?php



// session_start();
require 'config/constants.php';

  // get back form data if there was a registration error
  $firstname = $_SESSION['register-data']['$firstname'] ?? null;
  $middlename = $_SESSION['register-data']['$middlename'] ?? null;
  $lastname = $_SESSION['register-data']['$lastname'] ?? null;
  $gender = $_SESSION['register-data']['$gender'] ?? null;
  $username = $_SESSION['register-data']['$username'] ?? null;
  $email = $_SESSION['register-data']['$email'] ?? null;
  $id_number = $_SESSION['register-data']['$id_number'] ?? null;
  $representative = $_SESSION['register-data']['$representative'] ?? null;
  $representative_name = $_SESSION['register-data']['$representative_name'] ?? null;
  $representative_number = $_SESSION['register-data']['$representative_number'] ?? null;
  $family_number = $_SESSION['register-data']['$family_number'] ?? null;
  $previous_grade = $_SESSION['register-data']['$previous_grade'] ?? null;
  $age = $_SESSION['register-data']['$age'] ?? null;
  $average = $_SESSION['register-data']['$average'] ?? null;
  // delete signup data session
  unset($_SESSION['register-data']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadstar Academy Old Student Registration Page</title>
    <link rel="shortcut icon" href="../images/about achievements.png" type="image/x-icon">
<!-- ICONSCOUT CDN -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

<!-- GOOGLE FONTS (MONTSERRAT) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="https://fonts.googleapis.com/css2?family=montserrat:wght@300;400;500;600;700;800;900&display=swap"rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;0,900;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="csss/old.css">
<link rel="stylesheet" href="csss/olds.css">
<link rel="stylesheet" href="csss/oldstudent.css">
    
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="../studentid/home.php" class="pada__logo"> <img src="../images/logo.png" style="width: 145px;"></a>
            <ul class="nav__menu">
                <li><a href="indexs.php"><i class="uil uil-book-reader"></i>My Form </a></li>
                <li><a href="home.php"> <i class="uil uil-user-circle"></i> <?php echo $_SESSION['name']; ?></a></li>
                <li><a href="logout.php" style="text-align: center;"><i class="uil uil-sign-out-alt" style="color: red;"></i>Logout</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
<!----============= END OF NAVBAR ==================-->

<!----============= END OF NAVBAR ==================-->
</section>
            <section class="founder" style="margin-top: 3rem;">
                <div class="container founder__container">
                    <article class="founder__member">
                        <div class="founder__member-info">
     <h4 style="text-align: center;">Welcome <b style="color: #0ef;">  <?php echo $_SESSION['name']; ?>,</b> You've Sussessfully Logged In</h4>
    <p><b>1: </b>You're Going To register by Your ID Of  <b style="color: cornsilk;">  <?php echo $_SESSION['id_number']; ?></b>  Please Follow The  Instructions To Register Correctly!! <br>
Or If You've Already Registered Please <a href="indexs.php">Click here </a> To See Your Form Or Click My Form Button</p>
       </div>
<p><br style="text-align: center;">
     <a style="color: #fff; border-radius: 10px;" href="indexs.php" class="btn btn-primary"><i class="uil uil-book-reader"></i>My Form</a></p>
                 
                    </article>
                    
            
            </section>
            

            <section>
                
    <div class="containers">
        <div class="headings">Registration<h3>For <b style="text-decoration: underline; color: #0ef;">OLD</b> Students</h3></div>
        
        <form action="signup-logic.php" enctype="multipart/form-data" method="post">
            <div class="card-details">
                <div class="card-box">
                    <span class="details"> <span style="color: #0ef;"><?php echo $_SESSION['name']; ?>, </span>Your Id Number Is  <small style="color: red;">* </small><span style="color: cornsilk;"><h8><?php echo $_SESSION['id_number']; ?></span> </h8><small style="color: red;">* </small></span>
                    <input type="hidden" name="id_number" value="<?php echo $_SESSION['id_number']; ?>" placeholder="<?php echo $_SESSION['id_number']; ?>">
                </div>
                <div class="card-box">
                    <span class="details"> <span style="color: #0ef;"><?php echo $_SESSION['name']; ?>, </span><br> <small style="color: red;">* </small><span style="color: cornsilk;"><h8>Your ID</span> </h8><small style="color: red;">* </small></span>
                    <input type="text" disabled name="id_number" value="<?php echo $_SESSION['id_number']; ?>" placeholder="<?php echo $_SESSION['id_number']; ?>">
                </div>
                <div class="card-box">
                    <span class="details">First Name  <br><small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your First Name</small><small style="color: red;">* </small></span>
                    <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name" required>
                </div>
                <div class="card-box">
                    <span class="details">Middle Name <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Middle Name</small><small style="color: red;">* </small></span>
                    <input type="text" name="middlename" value="<?= $middlename ?>" placeholder="Middle name" required>
                </div>
                <div class="card-box">
                    <span class="details">Last Name  <br><small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Last Name</small><small style="color: red;">* </small></span>
                    <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last name" required>
                </div>
                <div class="card-box">
                    <span class="details">Email <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Email Address</small><small style="color: red;">* </small></span>
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email" required>
                </div>
                <div class="card-box">
                    <span class="details">Former Grade <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Previous grade</small><small style="color: red;">* </small></span>
                    <input type="number" name="previous_grade" value="<?= $previous_grade ?>"placeholder="Previous Grade" required>
                </div>
                <div class="card-box">
                    <span class="details">Promoted To Grade <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Coming Grade</small><small style="color: red;">* </small></span>
                    <input type="number" name="promoted_to" value="<?= $promoted_to ?>"placeholder="Promoted To Grade" required>
                </div>
                <div class="card-box">
                    <span class="details">Average <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Average</small><small style="color: red;">* </small></span>
                    <input type="text" name="average" value="<?= $average ?>"placeholder="Enter Your Average" required>
                </div>
                <div class="card-box">
                    <span class="details">Age <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Age</small><small style="color: red;">* </small></span>
                    <input type="number" name="age" value="<?= $age ?>"placeholder="Enter Your Age" required>
                </div>
                <div class="gender-category">
              <div> <span class="Gender-title">Gender <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>,Your Gender</small><small style="color: red;">* </small></span></div>
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="female" value="Female" required>
                    <label for="gender">Female</label>
                </div>
                <div class="Representative-category">
                <div>   <span class="Representative-title">Representative <br>  <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Representative</small><small style="color: red;">* </small></span></div>
                 <input type="radio" name="representative" id="male" value="Father">
                        <label for="representative">Father</label>
                        <input type="radio" name="representative" id="female" value="Mother" required>
                        <label for="representative">Mother</label>
                    </div>
                <div class="card-box">
                    <span class="details">Representative Full Name <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Representative Full Name</small><small style="color: red;">* </small></span>
                    <input type="text" name="representative_name" value="<?= $representative_name ?>"placeholder="Representative Full Name" required>
                </div>
                <div class="card-box">
                    <span class="details">Representative Phone Number <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Representative Phone Number</small><small style="color: red;">* </small></span>
                    <input type="number" name="representative_number" value="<?= $representative_number ?>"placeholder="Representative Phone Number" required>
                </div>
                <div class="card-box">
                    <span class="details">Additional Number <br>   <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your Representative Another Number Is Required</small><small style="color: red;">* </small></span>
                    <input type="number" name="family_number" value="<?= $family_number ?>"placeholder="Additional Number" required>
                </div>
                <div class="card-box">
                    <label for="image">Student Image <br>   <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>,Insert Your Image</small><small style="color: red;">* </small></label>
                    <input type="file" name="profile" id="Profile" required>
                </div>
                <div class="card-box">
                    <label for="slipt">Please Enter Your Paid Slipt <br>   <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Insert Your Paid Slipt</small><small style="color: red;">* </small></label>
                    <input type="file" name="slipt" id="slipt" required>
                </div>
                <div class="card-box">
                    <label for="card">Enter Your Card <br>   <small style="color: red;">  * </small><small style="color: cornsilk;"><?php echo $_SESSION['name']; ?>, Your school Card Is Required</small><small style="color: red;">* </small></label>
                    <input type="file" name="card" id="card" required>
                </div>
            </div>
            <div class="button">
                <input type="submit"  value="Register" name="submit">
            </form>

<br> <br>
            <p>Already Registered?</p><br>
     <a style="color: #fff; border-radius: 10px;" href="indexs.php" class="btn btn-primary"><i class="uil uil-list-ul"></i>Check Here</a></p>
    
        
            </section>


<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="../studentid/home.php" class="footer__logo"><h4>LEADSTAR</h4></a>
            <p>Leadstar Academy has an excellent reputation with experienced teachers, a wide range of courses, and modern facilities. There is a strong emphasis on student achievement, quality education, and providing a safe and supportive learning environment. You can trust that you or your child will receive the best possible education at Leadstar Academy.</p>

        </div>
            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms And Conditions</a></li>
                <li><a href="#">Refund Policy</a></li>
            </ul>
    </div>
    <div class="footer__4">
        <h4>Contact Us</h4>
        <p>+2510462110355</p>
        <p>+2510462110336</p>
        <p>info@leadstaracademy.com</p>
    <ul class="footer__socials">
        <li>
            <a href="https://m.facebook.com/leadstaracademy"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
            <a href="https://m.twitter.com/leadstaracademy"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="https://www.youtube.com/@leadstaracademy7017"><i class="uil uil-youtube"></i></a>
        </li>
</ul>
    </div>
</div>
<div class="footer__copyright">
    <small>Copyright &copy; Leadstar Academy School 2023</small>
    <br>

    <small> <li> <a href="../cretors.html"> Designed by          <b style="text-decoration: underline; color: lightgreen;">  FK </b></a> </li> </small>
</div>
</footer>




<script src="main.js"></script>






<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>






</body>
</html>