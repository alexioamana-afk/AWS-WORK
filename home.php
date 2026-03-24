<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MIKEY SHOP</title>

<style>
  body{
font-family: Arial, sans-serif;
margin:0;
padding:0;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
background:#111;
color:white;
}

nav .logo{
font-size:22px;
font-weight:bold;
}

nav ul{
list-style:none;
display:flex;
gap:20px;
}

nav ul li a{
color:white;
text-decoration:none;
font-size:16px;
}

.hero{
display:flex;
height:500px;
}

.hero-text{
width:60%;
padding:60px;
background:#f4f4f4;
}

.hero-text h1{
font-size:40px;
}

.hero-image{
width:40%;
}

.hero-image img{
width:100%;
height:100%;
object-fit:cover;
}

.products{
padding:50px;
text-align:center;
}

.product-container{
display:flex;
justify-content:center;
gap:30px;
}

.product{
border:1px solid #ddd;
padding:20px;
width:200px;
}

.product img{
width:100%;
}

footer{
background:#222;
color:white;
padding:40px;
display:flex;
justify-content:space-around;
}
</style>
</head>

<body>

<nav>
<div class="logo">SCORPION</div>

<ul>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="signup.php">Signup</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="dashboard.php">Dashboard</a></li>
</ul>
</nav>

<section class="hero">

<div class="hero-text">

<h1>Welcome to SCORPIONs Store</h1>

<p>
Our platform allows you to discover and buy high quality watches online.
We provide secure payment, fast delivery and the best prices.Just leave your 
subcription and we will reduce the price of some.
</p>

</div>

<div class="hero-image">

<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30">

</div>

</section>

<section class="products">

<h2>Our Watches</h2>

<div class="product-container">

<div class="product">
<img src="https://images.unsplash.com/photo-1547996160-81dfa63595aa">
<h3>Luxury Watch</h3>
<p>97500 XAF</p>
</div>

<div class="product">
<img src="Assets/Images/3888756_11873.jpg">
<h3>Sport Watch</h3>
<p>78000 XAF</p>
</div>

<div class="product">
<img src="https://images.unsplash.com/photo-1509048191080-d2984bad6ae5">
<h3>Classic Watch</h3>
<p>65000 XAF</p>
</div>

</div>

</section>

<footer>

<div>
<h3>Testimonials</h3>
<p>"Great watches and fast delivery!"</p>
<p>"Very good quality products."</p>
</div>

<div>
<h3>Feedback</h3>
<p>Email: SCORPION@eshop.com</p>
<p>Phone: +237-650-42-20-94</p>
</div>

</footer>

</body>

</html>