<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <title> New Student View</title>

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
            max-width: 60%;
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
    


</head>
<body>


<div id="popup" class="popup-container" onclick="hidePopup()">
        <img id="popup-image" class="popup-image" src="" alt="Pop-up Image">
    </div>



    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM newreg WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                <div class="mb-3">
                                        <label><b>First Name</b></label>
                                        <p class="form-control">
                                            <?=$student['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Middle Name</b></label>
                                        <p class="form-control">
                                            <?=$student['middlename'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Last Name</b></label>
                                        <p class="form-control">
                                            <?=$student['lastname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Age</b></label>
                                        <p class="form-control">
                                            <?=$student['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Average</b></label>
                                        <p class="form-control">
                                            <?=$student['average'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Phone Number</b></label>
                                        <p class="form-control">
                                            <?=$student['phone_number'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Region</b></label>
                                        <p class="form-control">
                                            <?=$student['region'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>City</b></label>
                                        <p class="form-control">
                                            <?=$student['city'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Average</b></label>
                                        <p class="form-control">
                                            <?=$student['average'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>School Name</b></label>
                                        <p class="form-control">
                                            <?=$student['school_name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>School Address</b></label>
                                        <p class="form-control">
                                            <?=$student['school_address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Email</b></label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Previous Grade</b></label>
                                        <p class="form-control">
                                            <?=$student['previous_grade'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Promoted To Grade</b></label>
                                        <p class="form-control">
                                            <?=$student['promoted_to'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Profile</b></label>
                                        <p class="form-control">
                                                    <img src="<?= "../newprofile/".$student['profile']; ?>"  width="20%" height="30%" alt="Image" onclick="showPopup(this)">
                                
                                           <?=$student['firstname'];?>
                                            <?=$student['middlename'];?>
                                            <?=$student['lastname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Slipt</b></label>
                                        <p class="form-control">
                                                    <img src="<?= "../newslipt/".$student['slipt']; ?>"  width="20%" height="30%" alt="Image"  onclick="showPopup(this)">
                                                    
                                                    
                                            <?=$student['slipt'];?> 
                                          

                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>Card</b></label>
                                        <p class="form-control">               
                                        <img src="<?= "../newcard/".$student['card']; ?>"  width="40%" height="30%" alt="Image"  onclick="showPopup(this)">                    
                                            <p><?=$student['card'];?>  </p>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label><b>ID Card</b></label>
                                        <p class="form-control">               
                                        <img src="<?= "../newidcard/".$student['id_card']; ?>"  width="40%" height="30%" alt="Image"  onclick="showPopup(this)">                    
                                            <p><?=$student['id_card'];?>  </p>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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