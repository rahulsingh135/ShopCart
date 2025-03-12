<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>universe</title>
    <link rel="stylesheet" href="style.css">



</head>

<body>
    <header id="header">
        <!-- <div class="logo"></div> -->
        <a href="#"><img src="img/14.png" alt="" class="logo"></a>
        <div class="search"><input type="text" placeholder="Search"><button>Search</button></div>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="/user/product/product1.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="/contect/contact.html">Contact</a></li>
                <li class="cart" id="cart"><img src="img/cart-img.png" alt=""></li>
                <li id=""></li>
                <?php
                if (isset($_SESSION["username"])) {
                    echo ("<div id='welcomeUser'>");
                    $usr = $_SESSION["uusername"];
                    echo ("Welcome " . $_SESSION["uname"] . "  ,  ");
                    echo ('<li class="acc" id="acc"><a>My Account</a></li>');
                    
                   
                }

                ?>
                <li class="acc" id="acc"><a>My Account</a></li>
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
                            <li><a href="#"><i class="fa-solid fa-power-off icon"></i></i> Logout</a></li>
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

    <section class="hero" id="hero">
        <div class="hero-text">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all product</h1>
            <p>Save more with cuopons & get up to 70% off!</p>
            <button class="btn">Shop Now</button>
        </div>
        <div class="himg">
            <img src="img/hero1.png" alt="">
        </div>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Service</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Summer ColluctionNew Moden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f2.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f3.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f4.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
        </div>
    </section>

    <section id="banner">
        <h4>Repair Service</h4>
        <h2>Up to <span> 70% off </span> - All T-Shirts & Accessories </h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arivals</h2>
        <p>Summer ColluctionNew Moden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="" class="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                        <img src="img/products/star.png" alt="">
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><img src="img/products/cart.png" alt="" class="cart"></a>
            </div>
        </div>
    </section>

    <section id="banner2" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <p>best classic dress in sale</p>
            <button class="transperent">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <p>best classic dress in sale</p>
            <button class="transperent">Collection</button>
        </div>
    </section>

    <section id="banner3" class="section-p1">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter collection -50% Off</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW COLLECTION</h2>
            <h3>Winter collection -50% Off</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>Winter collection -50% Off</h3>
        </div>

    </section>



    <footer class="section-p1">
        <div class="col">
            <img src="img/14.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Plot No 3, Maitri Kunj, Risali, Bhilai, Chhattisgarh (490006)</p>
            <p><strong>Phone: </strong> +91-78791 22060 / +91-79998 45114</p>
            <p>info@logixhunt.com</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="Logo">
                    <a href=""><img src="img/facebook.png" alt=""></a>
                    <a href=""><img src="img/telegram.png" alt=""></a>
                    <a href=""><img src="img/youtube.png" alt=""></a>
                    <a href=""><img src="img/instagram.png" alt=""></a>
                    <a href=""><img src="img/twitter.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#product1">Our Products</a>
            <a href="/notes/policy.html">Privecy Policy</a>
            <a href="/notes/t&d.html">Term & Conditions</a>
            <a href="/contect/contact.html">Contact Us</a>
            <!-- <a href="/admin/html/index.html">Admin</a> -->
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="login/login.html">My Account</a>
            <a href="/category.html">View Cart</a>
            <a href="/category.html">My list</a>
            <a href="/category.html">My Order</a>
            <a href="/category.html">Track Order</a>
            <a href="#">help</a>
        </div>


    </footer>
    <div class="copyright">
        <p> © 2023 | All rights reserved.</p>
    </div>




    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/084eabbf2b.js" crossorigin="anonymous"></script>
</body>

</html>