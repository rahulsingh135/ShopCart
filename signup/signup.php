<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
  <header id="header">
    <!-- <div class="logo"></div> -->
    <a href="#"><img src="img/14.png" alt="" class="logo"></a>
    <div>
      <ul id="navbar">
        <li><a  href="../index.html">Home</a></li>
        <li><a href="../shop.html">Shop</a></li>
        <li><a href="../about.html">About</a></li>
        <li><a href="../contact.html">Contact</a></li>
        <li><a class="active" href="">Sign Up</a></li>
        <li class="cart" id="cart"><img src="img/cart-img.png" alt=""></li>
      </ul>
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
  <div class="login">
    <div class="signup-form">
      <div class="container">
        <div class="header">
          <h1>Create an Account</h1>
          <!-- <p>Get started for free!</p> -->
        </div>
        <form>
          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input class="signup-btn" type="submit" value="SIGN UP" />
        </form>
        <!-- <p>Or sign up with</p>
      <div class="social-icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
      </div> -->
        <p>Already have an account <a href="/login/login.html" style="color: #088178;">sign in</a></p>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>