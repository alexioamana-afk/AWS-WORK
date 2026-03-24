<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
<title>Home - E-Shop</title>

<style>

body{
font-family: Arial;
margin:0;
background:#f4f4f4;
}

/* NAVBAR */
nav{
background:#111;
padding:15px;
display:flex;
justify-content:space-between;
align-items:center;
}

nav .logo{
color:white;
font-size:20px;
font-weight:bold;
}

nav ul{
list-style:none;
display:flex;
margin:0;
padding:0;
}

nav ul li{
margin-left:20px;
}

nav ul li a{
color:white;
text-decoration:none;
font-size:16px;
}

/* HERO */
.hero{
text-align:center;
padding:50px;
background:white;
}

.hero h1{
font-size:32px;
}

/* PRODUCTS */
.products{
padding:30px;
text-align:center;
}

.product-box{
display:flex;
justify-content:center;
gap:20px;
}

.product{
background:white;
padding:15px;
width:150px;
border:1px solid #ccc;
border-radius:5px;
}

/* FOOTER */
footer{
background:#111;
color:white;
text-align:center;
padding:15px;
margin-top:20px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav>

<div class="logo">E-Shop</div>

<ul>

<li><a href="index.php">Home</a></li>
<li><a href="aboutus.php">About Us</a></li>

<?php
if(isset($_SESSION['user'])){
    echo '<li><a href="dashboard.php">Dashboard</a></li>';
    echo '<li><a href="logout.php">Logout</a></li>';
}else{
    echo '<li><a href="signup.php">Signup</a></li>';
    echo '<li><a href="login.php">Login</a></li>';
}
?>

</ul>

</nav>

<!-- HERO SECTION -->

<div class="hero">

<h1>Welcome to E-Shop</h1>

<p>This is a simple ecommerce website where you can buy watches.</p>

</div>

<!-- PRODUCTS -->

<div class="products">

<h2>Our Watches</h2>

<div class="product-box">

<div class="product">
<p>Luxury Watch</p>
<p>$150</p>
</div>

<div class="product">
<p>Sport Watch</p>
<p>$120</p>
</div>

<div class="product">
<p>Classic Watch</p>
<p>$100</p>
</div>

</div>

</div>

<!-- FOOTER -->

<footer>

<p>Contact: support@eshop.com</p>
<p>Customer feedback: Very good service ⭐⭐⭐⭐⭐</p>

</footer>

</body>

</html>

</html>