<?php include "header.php"; ?>



  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              
<?php 

include "config.php";

$query = "SELECT * FROM `user`";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{

?>

              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) 
                        
                        {
                            ?>
                    
                          <tr>
                              <td class='id'><?php echo $row["user_id"];  ?></td>
                              <td><?php echo $row["first_name"] . " " . $row["last_name"];  ?></td>
                              <td><?php echo $row["username"]; ?></td>
                              <td>
                                
                              <?php
                              if($row["role"]=="1")
                              {
                                echo "admin";
                              } 
                              else{
                                echo " normal user";
                              }
                              
                              ?>
                            
                            </td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php } ?>
                        
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php } ?>
<?php include "footer.php"; ?>
