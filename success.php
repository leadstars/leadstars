
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
    <title>Leadstar Academy about page</title>
    
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

<link rel="stylesheet" href="./csss/style.css">
<link rel="stylesheet" href="pop.css">
    
</head>
<body>
<!----============= END OF NAVBAR ==================-->



<!----============= END OF ACHIEVEMENTS ==================-->


<section class="founder">
   
    <section class="ham">
        <div class="popup" id="popup">
            <img src="tick (2).png">
            <h2>Thank You! <b style="color: #0ef;"> <?php echo $_SESSION['name']; ?></b></h2>
            <p><b style="color: #0ef;"><?php echo $_SESSION['name']; ?>,</b>Your Form Has been Succesfully Submitted !!</p>
            <p>Click OK To See</p>
            <a href="studentid/check.php"><button type="button" onclick="closePopup()">OK</button></a>
        </div>
    
</section>











<script src="./mains.js"></script>



<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>







</body>
</html>