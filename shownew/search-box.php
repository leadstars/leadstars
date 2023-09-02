<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>New Student Form</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="text-center">Find New Students Here</h4>
                        <a href="../admin/logout.php" class="btn btn-danger float-end">Logout</a>
                    </div>
                    <div class="card-header text-white ">
                        
                    <a href="index.php" > <button class="text-center btn btn-danger btn-sm"> <h4 class="text-center">See All New Students</h4></button> </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Student">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr><a href="student-view1.php?id=<?= $student['id']; ?>">
                                    <th>List No</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Student Image</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Average</th>
                                    <th>Phone Number</th>
                                    <th>Region</th>
                                    <th>City</th>
                                    <th>School Name</th>
                                    <th>School Address</th>
                                    <th>Previous Grade</th>
                                    <th>Promoted To Grade</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    </a>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                 $con = mysqli_connect("localhost","id21008871_leadstar","Leadstar@12","id21008871_student");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM newreg WHERE CONCAT(city,region,firstname,middlename,gender,phone_number,school_address,school_name,lastname,average,age,promoted_to,email) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $student)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $student['id']; ?></td> <td><?= $student['firstname']; ?></td>
                                                    <td><?= $student['middlename']; ?></td>
                                                    <td><?= $student['lastname']; ?></td>
                                                    <td> <a href="student-view1.php?id=<?= $student['id']; ?>"><img src="<?= "../newprofile/".$student['profile']; ?>" width="200px" height="250vh" alt="Image"></a></td>
                                                    <td><?= $student['gender']; ?></td>
                                                    <td><?= $student['age']; ?></td>
                                                    <td><?= $student['average']; ?></td>
                                                    <td><?= $student['phone_number']; ?></td>
                                                    <td><?= $student['region']; ?></td>
                                                    <td><?= $student['city']; ?></td>
                                                    <td><?= $student['school_name']; ?></td>
                                                    <td><?= $student['school_address']; ?></td>
                                                    <td><?= $student['previous_grade']; ?></td>
                                                    <td><?= $student['promoted_to']; ?></td>
                                                    <td><?= $student['email']; ?></td>
                                                <td><div class="md-12">
                                                    <a href="student-view1.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></div>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                   
                                                    </form>
                                                </td>
                                                    
                                                <p>   <a href="student-view1.php?id=<?= $student['id']; ?>" class="btn btn-danger btn-sm">View

                                           <?=$student['id'];?>,
                                            <?=$student['firstname'];?> 
                                            <?=$student['middlename'];?> 
                                            <?=$student['lastname'];?> 
                                                    </a></p> 
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="1">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>