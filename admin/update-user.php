<?php include "header.php"; ?>

<?php 

include "config.php";

$u_id = $_GET["id"];


$query  = "SELECT * FROM `user` WHERE `user_id` = '{$u_id}'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result))
{

$row  = mysqli_fetch_assoc($result);



?>



  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="1" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $row["last_name"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row["username"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              <option value="0">normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>


                  <!-- /Form -->


                <?php

                    if(isset($_POST["submit"]))
                    {
                        $u_id = $_GET["id"];
                        $user_fname = $_POST["f_name"];
                        $user_name = $_POST["username"];
                        $user_lname = $_POST["l_name"];
                        $user_role = $_POST["role"];

                        $query1 = "UPDATE `user` SET `first_name`='{$user_fname}',`last_name`='{$user_lname}',`username`='{$user_name}',`role`='{$user_role}' WHERE `user_id`= '{$u_id}'";

                        mysqli_query($conn,$query1);

                        
                    }
                


                ?>


              </div>
          </div>
      </div>
  </div>


  <?php  } ?>
<?php include "footer.php"; ?>