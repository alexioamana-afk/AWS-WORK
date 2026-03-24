<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<title>Home - E-Shop</title>

<style>

body{
font-family: Arial;
margin:0;
}

/* NAVBAR */
nav{
background:#111;
color:white;
padding:15px;
display:flex;
justify-content:space-between;
}

nav a{
color:white;
margin-left:15px;
text-decoration:none;
}

/* HERO */
.hero{
padding:40px;
text-align:center;
background:#f4f4f4;
}

/* PRODUCTS */
.products{
padding:30px;
text-align:center;
}

.product{
border:1px solid #ccc;
padding:15px;
margin:10px;
display:inline-block;
width:150px;
}

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

<div><b>E-Shop</b></div>

<div>

<a href="index.php">Home</a>
<a href="about.php">About Us</a>

<?php
if(isset($_SESSION['user'])){
    echo '<a href="dashboard.php">Dashboard</a>';
    echo '<a href="logout.php">Logout</a>';
}else{
    echo '<a href="signup.php">Signup</a>';
    echo '<a href="login.php">Login</a>';
}
?>

</div>

</nav>

<!-- HERO -->

<div class="hero">

<h1>Welcome to E-Shop</h1>

<p>This is a simple ecommerce website where you can buy watches online.</p>

</div>

<!-- PRODUCTS -->

<div class="products">

<h2>Watches</h2>

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

<!-- FOOTER -->

<footer>

<p>Feedback: good service, fast delivery</p>

</footer>

</body>

</html>