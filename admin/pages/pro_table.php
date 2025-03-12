<?php
require "../db_connection/db_con.php";

$custumer_query = "SELECT * FROM product_table";
$custumer_query_result = mysqli_query($con, $custumer_query);
// print_r($custumer_query_result);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shopkart</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include "../components/sidebar.php";
        include "../components/navbar.php";
        ?>
        <div class="container mt-5 pt-5">

            <table class="table">

                <a class="btn btn-primary" href="./products/pro_add.php">Add Product</a>
                <thead>
                    <tr>
                        <!-- <th scope="col">S.No</th> -->
                        <th scope="col">#id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">MRP</th>
                        <th scope="col">Selling Prize</th>

                        <!-- <th scope="col">Passworad</th> -->
                    </tr>
                </thead>

                <tbody>

                    <tr> <?php while ($row = mysqli_fetch_assoc($custumer_query_result)) {
                            ?>

                            <td><?php echo $row["product_id"]; ?></td>
                            <td><?php echo $row["product_name"]; ?></td>
                            <td><?php echo $row["product_catagory"]; ?></td>
                            <td><?php echo $row["product_brand"]; ?></td>
                            <td><?php echo $row["product_quantity"]; ?></td>
                            <td><?php echo $row["product_price"]; ?></td>
                            <td><?php echo $row["product_s_price"]; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary show-detail" id="<?php echo $row["product_id"]; ?>" style="margin-right: 2px;">Details</a>
                                <a href="./products/pro_edit.php?id=<?php echo $row["product_id"]; ?>" class="btn btn-primary" style="margin-right: 5px;">Edit</a>
                                <a href="./products/pro_delete.php?id=<?php echo $row["product_id"]; ?>" class="btn btn-danger">Delete</a>
                            </td>
                    </tr>

                <?php
                            }
                ?>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInput">Name</label>
                                        <input type="text" class="form-control"  id="product_name">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Catagory</label>
                                        <input type="text" class="form-control"  id="product_catagory">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Brand</label>
                                        <input type="text" class="form-control"  id="product_brand">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Quantity</label>
                                        <input type="text" class="form-control"  id="product_quantity">
                                        
                                    </div>
                                    
                                    <!-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                </tbody>
            </table>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        $(".show-detail").on("click", function() {
            var id = this.id;
            
            $.ajax({

                type: "post",
                url: "products/pro_details.php",
                dataType: "json",
                data: {
                    id : id,
                },
                success: function(data) {
                    // alert(data.product_name);
                    
                    $("#product_name").val(data.product_name);
                    $("#product_catagory").val(data.product_catagory);
                    $("#product_brand").val(data.product_brand);
                    $("#product_quantity").val(data.product_quantity);
                }
            });
            $('#exampleModal').modal('toggle');
        })




    </script>










    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>