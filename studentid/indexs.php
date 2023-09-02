<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['id_number'])) {

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadstar Academy Old Student Registration Page</title>
    
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
            <a href="home.php" class="pada__logo">  <img src="../images/logo.png" style="width: 145px;"></a>
            <ul class="nav__menu">
                <li><a href="home.php"> <i class="uil uil-user-circle"></i><?php echo $_SESSION['name']; ?></a></li>
                <li><a href="logout.php" style="text-align: center;"><i class="uil uil-sign-out-alt" style="color: red;"></i>Logout</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
<!----============= END OF NAVBAR ==================-->

<!----============= END OF NAVBAR ==================-->
</section>

<section>



<div class="containers">
        <div class="headings"> <h4><b style="color: #0ef;"><?php echo $_SESSION['name']; ?> </b>Please Enter ID Number And Click Enter To See Your <b style="text-decoration: underline; color: #0ef;">Registererd</b> Form</h4></div>
        
        <form action="results.php" method="post">
        <div class="card-details">
                <div class="card-box">
                    <span class="details" style="text-align: center;">Id Number  <small style="color: red;">* </small><small style="color: cornsilk;"></small><small style="color: red;">* </small></span>
                    <input type="text" name="id_number" placeholder="<?php echo $_SESSION['id_number']; ?>" required>
                </div>
            </div>
            <div class="button">
                <input type="submit"  value="Enter" name="submit">
            </form>
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