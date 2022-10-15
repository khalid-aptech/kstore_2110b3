<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Products</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-products.php">add Products</a>
            </div>
            <?php
            include "config.php";
            $query = "SELECT * FROM `post`
            LEFT JOIN category ON post.category = category.category_id
            LEFT JOIN user ON post.author = user.user_id";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <tr>
                                    <td class='id'><?php echo $row["post_id"]; ?></td>
                                    <td><?php echo $row["title"]; ?></td>
                                    <td><?php echo $row["category_name"]; ?></td>
                                    <td><?php echo $row["post_date"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td class='edit'><a href='update-products.php?=<?php echo $row["post_id"]; ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-products.php?=<?php echo $row["post_id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                            </tr>
                            <?php }  ?>

                        </tbody>
                    </table>
                <?php }  ?>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
                </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>