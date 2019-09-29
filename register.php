<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/flaticon.css"/>
<link rel="stylesheet" href="css/slicknav.min.css"/>
<link rel="stylesheet" href="css/jquery-ui.min.css"/>
<link rel="stylesheet" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/style.css"/>
  <title>Registration</title>

</head>
<body>



  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="./index.html" class="site-logo">
              <img src="img/logo.png" alt="">
            </a>
          </div>

          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <a href="login.php">Sign</a> In or <a href="register.php">Create Account</a>
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span>0</span>
                </div>
                <a href="#">Shopping Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="./product.html">Product Page</a></li>
              <li><a href="./category.html">Category Page</a></li>
              <li><a href="./cart.html">Cart Page</a></li>
              <li><a href="./checkout.html">Checkout Page</a></li>
              <li><a href="./contact.html">Contact Page</a></li>
            </ul>
          </li>
          <li><a href="admin.php">Admin</a></li>
        </ul>
      </div>
    </nav>
  </header>

<div class="container">


<div class="" style="margin-top: 40px;">
  <h2>Registration Page</h2>

<br><br><br>
<hr>
<br><br><br>
<form action="register.php" method="post">

<label for="username">Username: </label>
<input type="text" name="username">

<br><br><br>
<label for="email">Email: </label>
<input type="text" name="email">

<br><br><br>

<label for="password">Password: </label>
<input type="text" name="password_1">


<br><br><br>

<label for="password">Confirm Password: </label>
<input type="text" name="password_2">
<br>
<button class="btn btn-primary" type="submit" name="reg-user"><a href="index.html">Submit</a></button>



</form>

<p>Already a member? <a href="login.php">Login here</a></p>



</div>





</body>
</html>
