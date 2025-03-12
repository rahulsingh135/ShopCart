<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
  <header id="header">
    <!-- <div class="logo"></div> -->
    <a href="#"><img src="img/14.png" alt="" class="logo"></a>
    <div>
      <ul id="navbar">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="../contect/contact.html">Contact</a></li>
        <li><a href="./login/login.html">Log in</a></li>
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
  <div class="contact">
    <div class="contact-form">
      <div class="container">
        <div class="header">
          <h1>Contact us</h1>
          <p>Feel free to contact us if you need any assistance,<br> any help or another question.</p>
        </div>
        <form>
          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
          </div>

          <input class="send-btn" type="submit" value="Send" />

        </form>


      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>