<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="logo.png" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="About Us.html" class="nav-item nav-link">About Us</a>
                    <a href="ContactUs.html" class="nav-item nav-link ">Contact Us</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="Login.html" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav> <br><br>
    <!-- navbar -->
    <div class="container">
        <h1>Products</h1>
        <div class="row">
        <?php
            include "config.php";
            $query = "SELECT * FROM `post`
            LEFT JOIN category ON post.category = category.category_id
            LEFT JOIN user ON post.author = user.user_id";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            <div class="col-sm-3">
                <div class="card" style="width: 100%; ">
                    <a href=""><img class="card-img-top" src="admin/upload/<?php echo $row["post_img"];  ?>" alt="" style="width: 100%; height: 100%;"></a>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row["title"];  ?></h4>
                        <p class="card-text"><?php echo $row["description"];  ?><br>
                        </p>
                        <a href="product-detail.php?id=<?php echo $row["post_id"]; ?>" class="btn" style="color: black;">See Product</a>
                    </div>
                </div>
            </div>
            <br><br>
            <?php }  } ?>
        </div>
    </div>

</body>

</html>