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

    <style>
        body {
            margin-top: 20px;
            background-color: black;
            /* background-color: #f2f6fc; */
            /* color: #69707a; */
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }
    </style>



</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include "../../components/sidebar.php";
        include "../../components/navbar.php";
        ?>
        <div class="container mt-5 ">


            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" target="__blank">Profile</a>

                    <a class="nav-link" onclick="toggle()" target="__blank">Security</a>

                </nav>
                <!-- <hr class="mt-0 mb-4"> -->

            </div>



            <?php
            require "../../db_connection/db_con.php";

            $user_id = $_GET["user_id"];

            $query = " SELECT * FROM user_table WHERE user_id = '$user_id'";

            $result = mysqli_query($con, $query);
            $fetch = mysqli_fetch_assoc($result);
            $profile_view = true;
            $security_view = false;
            function toggle($profile_view, $security_view)
            {
                $profile_view = !$profile_view;

                $security_view = !$security_view;
            }
            if ($profile_view) {
                echo ' <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Upload new image</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">

                                <form action ="./cus_edit.php" method = "POST" >
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                        <input class="form-control"  id="inputUsername" name="username" type="text" placeholder="Enter your username" value ="' . $fetch["user_id"] . '" >
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Name</label>
                                            <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Enter your full name" value ="' . $fetch["user_name"] . ' " >
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" id="inputPhone" name="number" type="tel" placeholder="Enter your phone number" value ="' . $fetch["user_phone"] . ' ">
                                        </div>
                                       
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                       
                                        <!-- Form Group (location)-->
                                        <div class="col-md-6">
                                            
                                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                <input class="form-control" id="inputEmailAddress" name="mail" type="email" placeholder="Enter your email address" value ="' . $fetch["user_email"] . '" >
                                            </div>


                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLocation">Location</label>
                                                <input class="form-control" id="inputLocation" name="address" type="text" placeholder="Enter your location" value ="' . $fetch["user_address"] . '">
                                            </div>

                                        </div>
                                        <!-- Form Group (email address)-->
                                        <!-- <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" >
                                    </div> -->
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number">
                                        </div> -->
                                            <!-- Form Group (birthday)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="password">Password</label>
                                                <div class="input-group">
                                                    <button type="button" class="btn-light btn">show</button>
                                                    <input type="password" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" value ="' . $fetch["user_birthday"] . '" >
                                            </div>

                                        </div>
                                        <!-- Save changes button-->
                                        <input type="submit" class="btn btn-primary" value ="Save changes">
                                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
            } elseif ($security_view) {
                echo ' <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Change password card-->
                        <div class="card mb-4">
                            <div class="card-header">Change Password</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Group (current password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="currentPassword">Current Password</label>
                                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                    </div>
                                    <!-- Form Group (new password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="newPassword">New Password</label>
                                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                    </div>
                                    <!-- Form Group (confirm password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                                    </div>
                                    <button class="btn btn-primary" type="button">Save</button>
                                </form>
                            </div>
                        </div>
                        <!-- Security preferences card-->
                        <!-- <div class="card mb-4">
                            <div class="card-header">Security Preferences</div>
                            <div class="card-body">
                               
                                <h5 class="mb-1">Account Privacy</h5>
                                <p class="small text-muted">By setting your account to private, your profile information and posts will not be visible to users outside of your user groups.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioPrivacy1" type="radio" name="radioPrivacy" checked="">
                                        <label class="form-check-label" for="radioPrivacy1">Public (posts are available to all users)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioPrivacy2" type="radio" name="radioPrivacy">
                                        <label class="form-check-label" for="radioPrivacy2">Private (posts are available to only users in your groups)</label>
                                    </div>
                                </form>
                                <hr class="my-4">
                              
                                <h5 class="mb-1">Data Sharing</h5>
                                <p class="small text-muted">Sharing usage data can help us to improve our products and better serve our users as they navigation through our application. When you agree to share usage data with us, crash reports and usage analytics will be automatically sent to our development team for investigation.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioUsage1" type="radio" name="radioUsage" checked="">
                                        <label class="form-check-label" for="radioUsage1">Yes, share data and crash reports with app developers</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioUsage2" type="radio" name="radioUsage">
                                        <label class="form-check-label" for="radioUsage2">No, limit my data sharing with app developers</label>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Two factor authentication card-->
                        <div class="card mb-4">
                            <div class="card-header">Two-Factor Authentication</div>
                            <div class="card-body">
                                <p>Add another level of security to your account by enabling two-factor authentication. We will send you a text message to verify your login attempts on unrecognized devices and browsers.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" id="twoFactorOn" type="radio" name="twoFactor" checked="">
                                        <label class="form-check-label" for="twoFactorOn">On</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor">
                                        <label class="form-check-label" for="twoFactorOff">Off</label>
                                    </div>
                                    <div class="mt-3">
                                        <label class="small mb-1" for="twoFactorSMS">SMS Number</label>
                                        <input class="form-control" id="twoFactorSMS" type="tel" placeholder="Enter a phone number" value="555-123-4567">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Delete account card-->
                        <div class="card mb-4">
                            <div class="card-header">Delete Account</div>
                            <div class="card-body">
                                <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                                <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                            </div>
                        </div>
                    </div>
                </div>';
            }

            ?>

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