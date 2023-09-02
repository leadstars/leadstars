
<?php
// result_page.php

require 'db_conn.php';

session_start();




// Check if the student result is stored in the session
if (isset($_SESSION['student_result'])) {
  // Retrieve the student result from the session
  $studentResult = $_SESSION['student_result'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadstar Academy Old Student Registration Page</title>
    <style>
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
        }

        .popup-container.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }

        .popup-image {
            max-width: 30%;
            max-height: 100%;
        }


        
@media (max-width: 1024px){
    .popup-image{
        max-width: 80%;
        max-height: 80%;
    }
}

    
@media (max-width: 1274px){
    .popup-image{
        max-width: 80%;
        max-height: 80%;
    }
}

 

    </style>
    
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
                <li><a href="home.php"> <i class="uil uil-user-circle"></i> <?php echo $_SESSION['name']; ?>,</a></li>
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
        <div class="headings">Registration<h3>For <b style="text-decoration: underline; color: #0ef;">OLD</b> Students</h3></div>
        





    <div id="popup" class="popup-container" onclick="hidePopup()">
        <img id="popup-image" class="popup-image" src="" alt="Pop-up Image">
    </div>







        <form action="" enctype="multipart/form-data" method="post">
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Id Number  <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-check"></i><?php echo $studentResult['id_number']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="id_number" placeholder="<?php echo $studentResult['id_number']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">First Name  <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-book-reader"></i><?php echo $studentResult['firstname']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="firstname" min="50" placeholder="<?php echo $studentResult['firstname']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Middle Name  <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-user-square"></i><?php echo $studentResult['middlename']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="middlename" placeholder="<?php echo $studentResult['middlename']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Last Name  <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-user-check"></i><?php echo $studentResult['lastname']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="lastname" placeholder="<?php echo $studentResult['lastname']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Gender <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><i class="uil uil-user-circle"></i><?php echo $studentResult['gender']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="representative_name" placeholder="<?php echo $studentResult['gender']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Age <br> <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-16-plus"></i><?php echo $studentResult['age']; ?></small><small style="color: red;">* </small></span>
                    <input type="number"  disabled name="age" placeholder="<?php echo $studentResult['age']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Email <br> <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-envelope"></i><?php echo $studentResult['email']; ?></small><small style="color: red;">* </small></span>
                    <input type="email" disabled name="email" placeholder="<?php echo $studentResult['email']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Former Grade <br> <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-graduation-cap"></i><?php echo $studentResult['previous_grade']; ?></small><small style="color: red;">* </small></span>
                    <input type="number" disabled name="previous_grade" placeholder="<?php echo $studentResult['previous_grade']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Promoted To Grade <br> <small style="color: red;">* </small><small style="color: cornsilk;"><i class="uil uil-graduation-cap"></i><?php echo $studentResult['promoted_to']; ?></small><small style="color: red;">* </small></span>
                    <input type="number" disabled name="promoted_to" placeholder="<?php echo $studentResult['promoted_to']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Average <br> <small style="color: red;">* </small><small style="color: cornsilk;"><?php echo $studentResult['average']; ?>%</small><small style="color: red;">* </small></span>
                    <input type="number"  disabled name="average" placeholder="<?php echo $studentResult['average']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Representative <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><i class="uil uil-house-user"></i><?php echo $studentResult['representative']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="representative" placeholder="<?php echo $studentResult['representative']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Representative Full Name <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><i class="uil uil-house-user"></i><?php echo $studentResult['representative_name']; ?></small><small style="color: red;">* </small></span>
                    <input type="text" disabled name="representative_name" placeholder="<?php echo $studentResult['representative_name']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Representative Phone Number <br> <small style="color: red;">  * </small><small style="color: cornsilk;"><i class="uil uil-phone"></i><?php echo $studentResult['representative_number']; ?></small><small style="color: red;">* </small></span>
                    <input type="number" disabled name="representative_number" placeholder="<?php echo $studentResult['representative_number']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details">Additional Number <br>   <small style="color: red;">  * </small><small style="color: cornsilk;"><i class="uil uil-phone"></i><?php echo $studentResult['family_number']; ?></small><small style="color: red;">* </small></span>
                    <input type="number"  disabled name="family_number" placeholder="<?php echo $studentResult['family_number']; ?>" required>
                </div>
                <div class="card-box">
                    <span class="details"><?php echo $studentResult['firstname']; ?> <?php echo $studentResult['middlename']; ?> <?php echo $studentResult['lastname']; ?>
                <img src="<?= "./profile/".$studentResult['profile']; ?>" alt="Image" onclick="showPopup(this)">  <small style="color: red;">  * </small><small style="color: cornsilk;">Click To See Your Profile</small><small style="color: red;">* </small></span>
                </div>
                <div class="card-box">
                    <span class="details">Your Slipt
    <img src="<?= "./slipt/".$studentResult['slipt']; ?>" alt="Image" onclick="showPopup(this)">  <small style="color: red;">  * </small><small style="color: cornsilk;">Click To See Your Slipt</small><small style="color: red;">* </small></span>
                </div>
                <div class="card-box">
                    <span class="details">Your Card
    <img src="<?= "./card/".$studentResult['card']; ?>" alt="Image" onclick="showPopup(this)">  <small style="color: red;">  * </small><small style="color: cornsilk;">Click To see Your Card</small><small style="color: red;">* </small></span>
                </div>
            </div>
                <li><a href="logout.php" style="text-align: center;"><i class="uil uil-sign-out-alt" style="color: red;"></i>Logout</a></li></div>
               
            </form>
    
            </section>
            <section class="founder">
                <h2>Eligibility Criteria</h2>
                <div class="container founder__container">
                    <article class="founder__member">
                       
                        <div class="founder__member-info">
                            <h4>For Old Student</h4>
                            <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus inventore minus quibusdam, laboriosam similique consectetur laudantium veritatis corrupti doloremque eos doloribus, eveniet, at fuga expedita molestias? Est, eaque! Tempora architecto aliquid vel non ipsam perspiciatis vero eveniet omnis enim! Quaerat aut quibusdam magni pariatur earum dignissimos sit molestiae dicta modi laudantium in nostrum ut beatae nisi reprehenderit tenetur corrupti debitis vero magnam enim sed, voluptatum similique. Qui ut recusandae dolorem delectus. Quod dolor qui distinctio expedita reprehenderit, voluptatem sed voluptate dolores non praesentium consequatur minus ipsa adipisci perspiciatis. Molestiae nulla eius ratione nihil incidunt accusamus sint repellat vitae omnis sunt?</P>
                        </div>
                 
                    </article>
                    
            
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
  // Clear the session variable
  unset($_SESSION['student_result']);
} else {
  // If the student result is not found in the session, redirect back to the form page
  header("Location: indexs.php");
  exit();
}
?>



<script>
  // Disable page refresh on browser refresh button click
  window.onbeforeunload = function() {
    return "Are you sure you want to leave this page?";
  };
</script>




<script>
        function showPopup(image) {
            var popupImage = document.getElementById("popup-image");
            popupImage.src = image.src;
            document.getElementById("popup").classList.add("show");
        }

        function hidePopup() {
            document.getElementById("popup").classList.remove("show");
        }
    </script>


</body>
</html>