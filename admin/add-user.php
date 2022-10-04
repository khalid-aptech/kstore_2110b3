<?php include "header.php"; ?>




<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- Form End-->

            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST["save"])) {

    // echo "<pre>";
    // print_r($_POST);

    $user_fname = $_POST["fname"];
    $user_name = $_POST["user"];
    $user_lname = $_POST["lname"];
    $user_password = md5($_POST["password"]);
    $user_role = $_POST["role"];

    include "config.php";
    $query = "SELECT * FROM user WHERE `username` =  '{$user_name}'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      echo "<script>
      
      alert('user already exist')
      </script>" ;
    }
    else {
        $query1 = "INSERT INTO `user`(`first_name`, `last_name`, `username`, `password`, `role`) VALUES ('{$user_fname}','$user_lname','{$user_name}','{$user_password}','{$user_role}')";
        mysqli_query($conn, $query1);
    }
}



?>

<?php include "footer.php"; ?>