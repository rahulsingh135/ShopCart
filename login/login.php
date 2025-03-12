<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
  <header id="header">
    <!-- <div class="logo"></div> -->
    <a href="#">
      <h3 style="font-size: 1.65em; color: black; ">ShopCart</h3>
      <!-- <img src="img/14.png" alt="" class="logo"> -->
    </a>
    <div>
      <ul id="navbar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../shop.php">Shop</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../contact.php">Contact</a></li>
        <li><a class="active" href="./login/login.php">Log in</a></li>
        <li class="cart" id="cart"><img src="../img/cart-img.png" alt=""></li>
      </ul>
      <div class="cart-container" id="cart-container">
        <div class="products-container">
          <div class="p">Your cart is currently empty</div>
        </div>
      </div>
    </div>
    <div class="menu">
      <img id="bar" src="../img/menuicon1.png" alt="">
    </div>
  </header>
  <div class="login">
    <div class="signup-form">
      <div class="container ">
        <div class="header">
          <h1>Log in</h1>
          <!-- <p>Get started for free!</p> -->
        </div>

        <form id="loginform" >
          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username" id="username" name="username" />
          </div>
          <!-- <div class="input">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div> -->
          <div class="input">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password" id="password" name="password" />
          </div>
          <button id="login" type="submit" class="signup-btn">log in </button>
        </form>

        <p>Create new account here <a href="../signup/signup.php">sign up</a></p>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    $("#login").on("click", function(e) {
      e.preventDefault();
      var username = $("#username").val();
      var password = $("#password").val();
          
            
            $.ajax({

                type: "POST",
                url: "checklogin.php",
                dataType: "json",
                data: {
                  username : username,
                  password : password,
                 
                },
                success: function(data) { 
                  console.log(data); 
                  if(data==1){
                    window.location.href="../index.php"
                  }
                  
                }
            });
            
        })


</script>

  <!-- <script>
    $(document).on('submit', '#loginForm', function(e) {
      e.preventDefault();

      $.ajax({
        method: "POST",
        url: "./checklogin.php",
        data: $(this).serialize(),
        success: function(data) {

          if (data === 'success') {
            window.location.href = "../index.php";
          } else {
            $('#msg').html(data);
            $('#loginForm').find('input').val('')
          }

        }
      });
    });
  </script> -->


  <script src="../script.js"></script>
</body>

</html>