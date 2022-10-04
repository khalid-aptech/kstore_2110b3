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
                          <tr>
                              <td class='id'>1</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Electronics</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>2</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Mobiles</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>3</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>laptops</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>4</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Consoles</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>5</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>accessories</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>6</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>PCS</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>7</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>watches</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>8</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>tablets</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-products.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-products.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
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
<?php include "footer.php"; ?>
