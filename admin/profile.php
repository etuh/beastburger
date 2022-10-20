<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && ($_SESSION['role'] == 'admin')) {

  include('includes/header.php'); 
  include('includes/navbar.php');

 ?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
 -->
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Password </th>
            <th>Name</th>
            <th>Role</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
      <?php
        require('../accounts/db_conn.php');
        $result = $conn->prepare("SELECT * FROM users ORDER BY id ASC");
        $result->execute();
        error_reporting(0);
        // for($i=0; $row = $result->fetch(); $i++){

        while ($row = $result->fetch()) { 
      
    ?>

        <tr>
          <td><a><?php echo $row['id']; ?> </a></td>
          <td><a><?php echo $row['user_name']; ?></a></td>
          <td><a><?php echo $row['password']; ?></a></td>
          <td><a><?php echo $row['name']; ?></a></td>
          <td><a><?php echo $row['role']; ?></a></td>
        

        <td>
          <form action="" method="post">
              <input type="hidden" name="edit_id" value="">
                <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
          </form>
        </td>
        <td>
            <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
            </form>
        </td>

        </tr>

        <?php
         }
          ?>

                
          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php 
}else{
     header("Location: ../404.html");
     exit();
}
include('../accounts/db_conn.php');
include('includes/footer.php');
 ?>