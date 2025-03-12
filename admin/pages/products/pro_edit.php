<?php
require "../../db_connection/db_con.php";
$id = $_GET["id"];

$product_query = "SELECT * FROM product_table WHERE product_id='$id'";
$product_query_result = mysqli_query($con, $product_query);
// print_r($custumer_query_result);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />





</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include "../../components/sidebar.php";
        include "../../components/navbar.php";
        ?>
        <?php
        $fetch = mysqli_fetch_assoc($product_query_result); 






        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row tm-edit-product-row ">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form action="./pro_update.php" method="POST" class="tm-edit-product-form">
                            
                            <div class="form-group mb-3">
                                <label for="name">Product Name
                                </label>
                                <input id="name" name="product_name" type="text" value="<?php echo $fetch['product_name'] ?>" class="form-control validate" id="product_name" required />
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">Brand
                                    </label>
                                    <input id="expire_date" name="product_brand" value="<?php echo $fetch['product_brand'] ?>" type="text" id="product_brand" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Cloth Fabric
                                    </label>
                                    <input id="stock" name="product_cloth_fabric" type="text" value="<?php echo $fetch['product_cloth_fabric'] ?>" id="product_cloth_fabric" class="form-control validate" required />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control validate" name="product_description"  id="product_description" required><?php echo $fetch['product_description'] ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="custom-select tm-select-accounts" name="product_catagory" value="<?php echo $fetch['product_catagory'] ?>" id="category">
                                    <option selected>Select category</option>
                                    <option value="Man">Men</option>
                                    <option value="Women">Women</option>
                                    <!-- <option value="3"></option> -->
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">Expire Date
                                    </label>
                                    <input id="expire_date" name="expire_date" type="text" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Units In Stock
                                    </label>
                                    <input id="stock" name="product_quantity" value="<?php echo $fetch['product_quantity'] ?>" id="product_quantity" value="" type="text" class="form-control validate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">MRP
                                    </label>
                                    <input id="expire_date" name="product_price" value="<?php echo $fetch['product_price'] ?>" type="number" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Selling price
                                    </label>
                                    <input id="stock" name="product_s_price" type="number" value="<?php echo $fetch['product_s_price'] ?>" class="form-control validate" required />
                                </div>
                            </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <!-- <div class="tm-product-img-dummy mx-auto">
                            <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                        </div> -->
                        <div class="custom-file mt-3 mb-3">
                            <input id="fileInput" type="file" style="display:none;" />
                            <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
                        </div>
                        <div class="w-100 d-flex justify-content-center " style=" height: 34vh; ">
                            <img src="../../../image/<?php echo $fetch['product_image'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Save Change</button>
                    </div>
                    </form>

                </div>




            </div>




        </div>

    </div>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

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
                    $("#product_brand").val(data.product_brand);
                    $("#product_catagory").val(data.product_catagory);
                    $("#product_quantity").val(data.product_quantity);
                }
            });
            $('#exampleModal').modal('toggle');
        })




    </script> -->

        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
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