<?php
$id = $_GET["id"];
require "./db_con.php";

$product_query = "SELECT * FROM product_table WHERE product_id='$id'";
$product_query_result = mysqli_query($con, $product_query);
$res = mysqli_fetch_assoc($product_query_result);


?>



<?php
require "./header.php";
require "./navbar.php";
?>


<section id="prodetails" class="section-p1">
    <div class="pro-main-img">
        <img src="./image/<?php echo $res["product_image"] ?>" id="mainimg" width="100%" alt="">

        <div class="small-img-group">

            <div class="small-img-col">
                <img src="./img/products/f1.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="./img/products/f2.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="./img/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="./img/products/f4.jpg" width="100%" class="small-img" alt="">
            </div>

        </div>

    </div>

    <div class="pro-img-detail">
        <h4><?php echo $res["product_name"] ?></h4>
        <h6><?php echo $res["product_brand"] ?></h6>
        <h2> ₹ <?php echo $res["product_price"] ?> </h2>
        <select>
            <option value="">Select Size</option>
            <option value="">Small</option>
            <option value="">Large</option>
            <option value="">XL</option>
            <option value="">XXL</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add to cart</button>
        <h4>Product Details</h4>
        <span><?php echo $res["product_description"] ?></span>
    </div>
</section>

<?php
include "./productSection.php"
?>

<section id="nbar" class="section-p1">
    <a href="">1</a>
    <a href="">2</a>
    <a href="">3</a>
    <a href=""><i class="fa-solid fa-arrow-right"></i></a>
</section>



<script>
    var mainimg = document.getElementById("mainimg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function() {
        mainimg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        mainimg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        mainimg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        mainimg.src = smallimg[3].src;
    }
</script>



<?php
require "./footer.php";
?>