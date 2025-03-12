



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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>




</head>

<body>
  <div class="container-scroller ">
    <!-- partial:partials/_sidebar.html -->
    <?php
    include "../components/sidebar.php";
    include "../components/navbar.php";
    ?>
    <div class="container mt-5 pt-5 ">
    <table class="table">

                <thead>
                    <tr>
                        <th scope="col">SNo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>1</td>
                        <td>Pen</td>
                        <td><input type="text" name="Price1" id="price1"></td>
                        <td><input type="text" name="" id="qty1" value="1"></td>
                        <td id="t1">0</td>
                    </tr>
                    <tr>

                        <td>2</td>
                        <td>Water botle</td>
                        <td><input type="text" name="Price2" id="price2"></td>
                        <td><input type="text" name="" id="qty2" value="1"></td>
                        <td id="t2">0</td>
                    </tr>
                    <tr>
                       
                        <td>1</td>
                        <td>Pencil</td>
                        <td><input type="text" name="Price3" id="price3"></td>
                        <td><input type="text" name="" id="qty3" value="1"></td>
                        <td id="t3">0</td>
                    </tr>

                    <tr>

                        <td colspan="2">Sub Total</td>
                        <td id="stotal">0</td>
                    </tr>
                    <tr>
                        <td colspan="2">Tax (17%)</td>
                        <td id="tax">0</td>
                    </tr>
                    <tr>
                        <td colspan="2">Discount <input type="text" value="0" name="" id="discount"></td>
                        <td id="sdiscount">0</td>
                    </tr>
                    <tr>
                        <td colspan="2">Grand Total</td>
                        <td id="gtotal">0</td>
                    </tr>

                </tbody>
            </table>
            <button id="get_btn">Click</button>

            <script>
        function calculation() {
            subTotal();
            discount();
            tax();
            grandTotal();
        }

        $("#price1").keyup(function() {
            var p1 = parseFloat($("#price1").val());
            var q1 = parseFloat($("#qty1").val());
            var total1 = p1 * q1;
            $("#t1").html(total1);
            calculation();

        });
        $("#qty1").keyup(function() {
            var p1 = parseFloat($("#price1").val());
            var q1 = parseFloat($("#qty1").val());
            var total1 = p1 * q1;
            $("#t1").html(total1);
            calculation();

        });
        $("#price2").keyup(function() {
            var p2 = parseFloat($("#price2").val());
            var q2 = parseFloat($("#qty2").val());
            var total2 = p2 * q2;
            $("#t2").html(total2);
            calculation();


        });
        $("#qty2").keyup(function() {
            var p2 = parseFloat($("#price2").val());
            var q2 = parseFloat($("#qty2").val());
            var total2 = p2 * q2;
            $("#t2").html(total2);
            calculation();


        });
        $("#price3").keyup(function() {
            var p3 = parseFloat($("#price3").val());
            var q3 = parseFloat($("#qty3").val());
            var total3 = p3 * q3;
            $("#t3").html(total3);
            calculation();


        });
        $("#qty3").keyup(function() {
            var p3 = parseFloat($("#price3").val());
            var q3 = parseFloat($("#qty3").val());
            var total3 = p3 * q3;
            $("#t3").html(total3);
            calculation();


        });

        function subTotal() {
            var st1 = parseFloat($("#t1").html());
            var st2 = parseFloat($("#t2").html());
            var st3 = parseFloat($("#t3").html());
            var subTotal = st1 + st2 + st3;

            $("#stotal").text(subTotal);


        };

        $("#discount").keyup(function() {
            discount();
            grandTotal();
        });

        function discount() {

            var stotal = parseFloat($("#stotal").html());
            var dis = parseFloat($("#discount").val());
            var discount = stotal * dis / 100;
            $("#sdiscount").html(discount);




        }

        function tax() {
            var sTotal = parseFloat($("#stotal").html());
            var ttax = parseFloat(sTotal) * (17 / 100);
            ttax.toFixed(2);
            $("#tax").html(ttax);


        };

        function grandTotal() {
            var sub = parseFloat($("#stotal").html());
            var discount = parseFloat($("#sdiscount").html());
            var tax = parseFloat($("#tax").html());
            $("#gtotal").html(sub + tax - discount);
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#get_btn").click(function() {
                $.ajax({
                    type: "post",
                    url: 'j.php',
                    datatype: 'json',
                    success: function(data) {
                        alert('hi');

                    }
                });
            });
        });
    </script>
      
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