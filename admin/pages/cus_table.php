<?php
require "../db_connection/db_con.php";

$custumer_query = "SELECT * FROM user_table";
$custumer_query_result = mysqli_query($con, $custumer_query);



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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />





</head>

<body>


  <div class="container-scroller ">
    <!-- partial:partials/_sidebar.html -->
    <?php
    include "../components/sidebar.php";
    include "../components/navbar.php";
    ?>
    <!-- <div class="content-wrapper"> -->
      <div class="container mt-5 pt-5 ">

        <table class="table " style="color: white;">


          <thead>
            <tr>
              <!-- <th scope="col">S.No</th> -->
              <th scope="col">User_id</th>
              <th scope="col">Name</th>
              <th scope="col">Mail</th>
              <th scope="col">Number</th>
              <th scope="col">Address</th>
              <th scope="col">Last Vist</th>
              <!-- <th scope="col">Passworad</th> -->
            </tr>
          </thead>

          <tbody>

            <tr> <?php while ($row = mysqli_fetch_assoc($custumer_query_result)) {
                  ?>

                <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["user_name"]; ?></td>
                <td><?php echo $row["user_email"]; ?></td>
                <td><?php echo $row["user_phone"]; ?></td>
                <td><?php echo $row["user_address"]; ?></td>
                <td><?php echo $row["user_last_visit"]; ?></td>
                <td>
                  <a href="./customer/cus_details.php?user_id=<?php echo $row["user_id"]; ?> " class="btn btn-primary" style="margin-right: 2px;">Details</a>



                  <!-- Button trigger modal -->
                  <!-- <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Details
                </button> -->

                  <!-- Modal -->





                  <!-- <a href="" class="btn btn-primary" style="margin-right: 5px;">Edit</a> -->
                  <a href="./customer/cus_delete.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

          <?php
                  }
          ?>


          </tbody>
        </table>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>