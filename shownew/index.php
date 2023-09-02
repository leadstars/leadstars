<?php
    session_start();
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

    <title>Student Details</title>
</head>
<body>
  
    <div class="container mt-4 table-responsive">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center"> New Student Form Details
                        </h4>
                        
                        <a href="../admin/logout.php" class="btn btn-danger float-end">Logout</a>
                    <div class="card-header">
                    <a href="search-box.php" > <button class="text-center btn btn-danger btn-sm"> <h4 class="text-center">Find New Student Here</h4></button> </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>List</th>
                                    <th>First-Name</th>
                                    <th>Middle-Name</th>
                                    <th>Last-Name</th>
                                    <th>Student Image</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Average</th>
                                    <th>Phone Number</th>
                                    <th>Region</th>
                                    <th>City</th>
                                    <th>School Name</th>
                                    <th>School Address</th>
                                    <th>Email</th>
                                    <th>Previous Grade</th>
                                    <th>Promoted To Grade</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM newreg";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['firstname']; ?></td>
                                                <td><?= $student['middlename']; ?></td>
                                                <td><?= $student['lastname']; ?></td>
                                                
                                                <td>
                                                   <a href="student-view.php?id=<?= $student['id']; ?>"> <img src="<?= "../newprofile/".$student['profile']; ?>" width="120px" alt="Image"></a></td>
                                                <td><?= $student['gender']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?= $student['average']; ?></td>
                                                <td><?= $student['phone_number']; ?></td>
                                                <td><?= $student['region']; ?></td>
                                                <td><?= $student['city']; ?></td>
                                                <td><?= $student['school_name']; ?></td>
                                                <td><?= $student['school_address']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['previous_grade']; ?></td>
                                                <td><?= $student['promoted_to']; ?></td>
                                                <td><div class="md-12">
                                                    <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></div>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>let table = new DataTable('#datatable1');</script>
    <script src="css/bootstrap.bundle.js"></script>
    <script src="css/jquery.dataTables.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });
    $(document).on('submit', '#addUser', function(e) {
      e.preventDefault();
      var middlename = $('#addmiddlenameField').val();
      var id_number = $('#addUserField').val();
      var firstname = $('#addfirstnameField').val();
      var email = $('#addEmailField').val();
      if (middlename != '' && id_number != '' && firstname != '' && email != '') {
        $.ajax({
          url: "add_user.php",
          type: "post",
          data: {
            middlename: middlename,
            id_number: id_number,
            firstname: firstname,
            email: email
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              mytable = $('#example').DataTable();
              mytable.draw();
              $('#addUserModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
    $(document).on('submit', '#updateUser', function(e) {
      e.preventDefault();
      //var tr = $(this).closest('tr');
      var middlename = $('#middlenameField').val();
      var id_number = $('#nameField').val();
      var firstname = $('#firstnameField').val();
      var email = $('#emailField').val();
      var trid = $('#trid').val();
      var id = $('#id').val();
      if (middlename != '' && id_number != '' && firstname != '' && email != '') {
        $.ajax({
          url: "update_user.php",
          type: "post",
          data: {
            middlename: middlename,
            id_number: id_number,
            firstname: firstname,
            email: email,
            id: id
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              table = $('#example').DataTable();
              // table.cell(parseInt(trid) - 1,0).data(id);
              // table.cell(parseInt(trid) - 1,1).data(id_number);
              // table.cell(parseInt(trid) - 1,2).data(email);
              // table.cell(parseInt(trid) - 1,3).data(firstname);
              // table.cell(parseInt(trid) - 1,4).data(middlename);
              var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
              var row = table.row("[id='" + trid + "']");
              row.row("[id='" + trid + "']").data([id, id_number, email, firstname, middlename, button]);
              $('#exampleModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
    $('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_data.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#nameField').val(json.id_number);
          $('#emailField').val(json.email);
          $('#firstnameField').val(json.firstname);
          $('#middlenameField').val(json.middlename);
          $('#id').val(id);
          $('#trid').val(trid);
        }
      })
    });

    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete this User ? ")) {
        $.ajax({
          url: "delete_user.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }



    })
  </script>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <div class="mb-3 row">
              <label for="nameField" class="col-md-3 form-label">Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="nameField" name="name">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="emailField" class="col-md-3 form-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" id="emailField" name="email">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="firstnameField" class="col-md-3 form-label">firstname</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="firstnameField" name="firstname">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="middlenameField" class="col-md-3 form-label">middlename</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="middlenameField" name="middlename">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add user Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addUser" action="">
            <div class="mb-3 row">
              <label for="addUserField" class="col-md-3 form-label">Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addUserField" name="name">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addEmailField" class="col-md-3 form-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" id="addEmailField" name="email">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addfirstnameField" class="col-md-3 form-label">firstname</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addfirstnameField" name="firstname">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addmiddlenameField" class="col-md-3 form-label">middlename</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addmiddlenameField" name="middlename">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>