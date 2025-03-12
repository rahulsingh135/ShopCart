<?php

require "./db_con.php";

$product_query = "SELECT * FROM product_table";
$product_query_result = mysqli_query($con, $product_query);

?>

<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <p>Summer ColluctionNew Moden Design</p>
    <div class="pro-container">
        <?php
        while ($res = mysqli_fetch_assoc($product_query_result)) {



        ?>
            <div class="pro" id="<?php echo $res["product_id"] ?>" onclick="window.location.href='pro_details.php?id=<?php echo $res['product_id'] ?>';">
                <img src="./image/<?php echo $res["product_image"] ?>" alt="" class="img">
                
                <div class="des">
                    <span><?php echo $res["product_brand"] ?></span>
                    <h5><?php echo $res["product_name"] ?></h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4><?php echo $res["product_price"] ?></h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
        <?php
        }
        ?>
    </div>
</section>