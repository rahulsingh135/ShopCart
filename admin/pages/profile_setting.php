<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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

    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8;
        }

        .profile-button {
            background: #BA68C8;
            box-shadow: none;
            border: none;
        }

        .profile-button:hover {
            background: #682773;
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none;
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none;
        }

        .back:hover {
            color: #682773;
            cursor: pointer;
        }
    </style>



</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include "../components/sidebar.php";
        include "../components/navbar.php";
        ?>
        <div class="main-panel ">
            <div class="content-wrapper ">
                <div class="container rounded mt-5" style="background-color: #191c24;">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5 text-black">
                                <img class="rounded-circle bg-secondary mt-3" src="../assets/images/pro_image/rahul.png" width="150" height="150"><br>
                                <!-- <span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span> -->

                                <form action="./insert/pro_img_input.php" method="POST" enctype="multipart/form-data">
                                    <label class="btn btn-primary profile-button" for="file_choose">Edit</label>
                                    <input type="file" id="file_choose" name="file_input" style="display: none;"> <br>
                                    <input class="btn btn-primary profile-button" type="submit">

                                    <!-- <div class="mt-1 text-right"><input class="btn btn-primary profile-button" type="button" value="edit" ></div> -->
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8 text-black">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-row align-items-center text-light ">
                                        <h6>Account Settings</h6>
                                    </div>
                                    <!-- <h6 class="text-right">Edit Profile</h6> -->
                                </div>
                                <!-- <div class="row mt-2">
                                    <label class="small mb-1" for="inputFirstName">Name</label>

                                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Name"></div>


                                </div> -->

                                <div class="row gx-3 mb-3 text-light">

                                    <div class="col-md-6">
                                        <label class="small mb-1" >Name</label>
                                        <input class="form-control"  name="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Email</label>
                                        <input class="form-control" type="email" placeholder="Email">
                                    </div>

                                </div>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" >Number</label>
                                        <input class="form-control"   type="Number" placeholder="Number">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="">Address</label>
                                        <input class="form-control"  type="text" placeholder="Address">
                                    </div>

                                </div>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" >Password</label>
                                        <input class="form-control"   type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="">Re-enter password</label>
                                        <input class="form-control"  type="password" placeholder="Re-enter password">
                                    </div>

                                </div>


                               
                                <!-- <div class="row mt-3">
        <div class="col-md-6"><input type="text" class="form-control" placeholder="Bank Name" value="Bank of America"></div>
        <div class="col-md-6"><input type="text" class="form-control" value="043958409584095" placeholder="Account Number"></div>
    </div> -->
                                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>




        </div>

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