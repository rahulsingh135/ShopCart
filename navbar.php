<?php
$login = false;
if (isset($_SESSION["isLogin"])) {
    $login = $_SESSION["isLogin"];
}
?>

<header id="header">
    <!-- <div class="logo"></div> -->
    <a href="#">
        <h3 style="font-size: 1.65em; color: black; ">ShopCart</h3>
        <!-- <img src="img/14.png" alt="" class="logo"> -->
    </a>
    <div>
        <ul id="navbar">
            <div class="search"><input type="text" placeholder="Search"></div>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php

            if (!$login) {
                echo ' <li><a href="./login/login.php">Log in</a></li>';
            } else {
                echo ' <li class="acc" id="acc"><a>My Account</a></li>';
            }


            ?>


            <li class="cart" id="cart"><img src="img/cart-img.png" alt=""></li>
        </ul>
        <div class="user-container" id="user-container">
            <div class="info-container">
                <div class="myaccount">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user icon"></i> My Profile</a></li>
                        <hr>

                        <li><a href="#"><i class="fa-solid fa-heart icon"></i> My Wishlist</a></li>
                        <hr>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping icon"></i> My Order</a></li>
                        <hr>
                        <li><a href="#"><i class="fa-solid fa-bell icon"></i> Notification</a></li>
                        <hr>
                        <li><a href="#"><i class="fa-solid fa-circle-info icon"></i> Help & Support</a></li>
                        <hr>
                        <li><a href="./logout.php"><i class="fa-solid fa-power-off icon"></i></i> Logout</a></li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-container" id="cart-container">
            <div class="products-container">
                <div class="p">Your cart is currently empty</div>
            </div>
        </div>
    </div>
    <div class="menu">
        <img id="bar" src="img/menuicon1.png" alt="">
    </div>
</header>