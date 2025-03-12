<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shopkart</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row tm-edit-product-row ">
                    <form action="./pro_insert.php" method="POST" enctype="multipart/form-data" class="tm-edit-product-form row">
                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <div class="form-group mb-3">
                                <label for="name">Product Name
                                </label>
                                <input id="name" name="product_name" type="text" class="form-control validate" id="product_name" required />
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">Brand
                                    </label>
                                    <input id="expire_date" type="text" name="product_brand" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Cloth Fabric
                                    </label>
                                    <input id="stock" type="text" name="product_cloth_fabric" class="form-control validate" required />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control validate" name="product_description" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="custom-select tm-select-accounts" name="product_catagory" id="category">
                                    <option selected>Select category</option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                                    <!-- <option value="3"></option> -->
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">Expire Date
                                    </label>
                                    <input id="expire_date" name="Product_exp_date" type="text" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Units In Stock
                                    </label>
                                    <input id="stock" name="product_quantity" value="" type="text" class="form-control validate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="expire_date">MRP
                                    </label>
                                    <input id="expire_date" name="product_price" type="text" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Selling price
                                    </label>
                                    <input id="stock" name="product_s_price" type="text" class="form-control validate" required />
                                </div>
                            </div>

                        </div>
                        <div class="img col-6">
                            <div class="col-xl-6 row-lg-6 col-md-12 mx-auto mb-4">
                                <div class="tm-product-img-dummy mx-auto">
                                    <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                                </div>
                                <div class="w-100 d-flex justify-content-center " style=" height: 34vh; ">
                                    <img src="../images/" alt="">
                                </div>
                                <div class="custom-file mt-3 mb-3">
                                    <input id="product_image" name="product_image" type="file" style="display:none;" />
                                    <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('product_image').click();" />
                                </div>
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



    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>