
<?php
// Assuming you have already established a database connection


include "db_conn.php";

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO artclub (firstname, lastname, phone, email, message) VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";
    
    if(mysqli_query($conn, $sql)){
                        header('location: ' . 'contasent.php');
                        die();
    } else{
        header('location: ' . 'contafail.php');
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadstar Academy Contacting page</title>
    
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

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/LAcontact.css">
    
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="pada__logo"> <img src="./images/logo.png" style="width: 145px;"></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="clubs.html">Clubs</a></li>
                <li><a href="department.html">Department</a></li>
                <li><a href="button.html">Register</a></li>
                <li><a href="gallery.html">LA. Gallery</a></li>
                <li><a href="admin/index.php">Admin Login</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!----============= END OF NAVBAR ==================-->



    <section class="apply">
        <div class="container apply__container">
            <aside class="apply__aside">
                <div class="aside__image">
                    <img src="./images/contactart.png">
                </div>
                <h2>Contact</h2>
                <p>
                    Hi there, I am Fikadu, I'm trying to reach out to you and I'm wondering if you could write on the best way to reach out to me. <b>Thank You For Choosing Our School.</b></p>
                <ul class="apply__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+251935486474</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope-times"></i>
                        <h5>fikaduefrem12@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Shashemene, Ethiopia</h5>
                    </li>
                </ul>
                <ul class="apply__socials">
                    <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a> </li>
                    <li><a href="https://facebook.com"><i class="fa fa-twitter"></i></a> </li>
                    <li><a href="https://facebook.com"><i class="fa fa-youtube"></i></a> </li>
                </ul>
            </aside>
        
        
        

    
    <form action="" method="POST" class="apply__form">
        <div class="form__name">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="number" name="phone" placeholder="Your phone number" required>
        </div>
        <input type="email" name="email" placeholder="Your Email Address" required>
      
        <textarea name="message" rows="7" placeholder="Message" required style="resize: none;"></textarea>
        <button type="submit" name="submit" class="btn btn-primary">Send</button>
    </div>
    </form>
</div>
</section>


<div class="comma location">
    <div class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3915129295897!2d38.614567613954286!3d7.196091616977015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b15590dea10ce7%3A0xdc31cc1c2f1b90f7!2sLeadstar%20international%20Academy%20School!5e0!3m2!1sen!2sus!4v1680527063907!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>



    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>LEADSTAR</h4></a>
                <p>Leadstar Academy has an excellent reputation with experienced teachers, a wide range of courses, and modern facilities. There is a strong emphasis on student achievement, quality education, and providing a safe and supportive learning environment. You can trust that you or your child will receive the best possible education at Leadstar Academy.</p>
    
            </div>
                <div class="footer__2">
                    <h4>Permalinks</h4>
                    <ul class="permalinks">
                        <ul class="permalinks">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="clubs.html">Clubs</a></li>
                            <li><a href="department.html">Department</a></li>
                            <li><a href="LAcontact.html">Contact</a></li>
                            <li><a href="button.html">Register</a></li>
                            <li><a href="gallery.html">LA. Gallery</a></li>
                            <li><a href="cretors.html">Creators</a></li>
                </ul>
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
        </li>
        <li>
            <a href="https://m.facebook.com/leadstaracademy"><i class="uil uil-facebook-f"></i></a>
        </li>
        <li>
            <a href="https://m.twitter.com/leadstaracademy"><i class="uil uil-twitter"></i></a>
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
    
        <small> <li> <a href="cretors.html"> Designed by          <b style="text-decoration: underline; color: lightgreen;">  FK </b></a> </li> </small>
    </div>
    </footer>
    
    
    
    
    <script src="./main.js"></script>


</body>
</html>
