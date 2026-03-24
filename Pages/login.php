<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - E-Shop</title>

<style>
body{
font-family: Arial;
background:#f4f4f4;
margin:0;
padding:0;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
background:#111;
color:white;
padding:15px 40px;
}

nav a{
color:white;
text-decoration:none;
margin-left:20px;
}

.container{
display:flex;
justify-content:center;
align-items:center;
height:80vh;
}

form{
background:white;
padding:40px;
width:350px;
border-radius:8px;
box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

form h2{
text-align:center;
margin-bottom:25px;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#111;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#444;
}
    </style>
</head>

<body>

<nav>

<div class="logo">SCORPION</div>

<ul>

<li><a href="home.php">Home</a></li>

<li><a href="about.php">About Us</a></li>

<?php

if(isset($_SESSION['user'])){
echo '<li><a href="logout.php">Logout</a></li>';
}
else{
echo '<li><a href="dashboard.php">Signup</a></li>';
echo '<li><a href="dashboard.php">Login</a></li>';
}

?>

</ul>

</nav>
<div class="container">

<form>

<h2>Login</h2>

<input type="text" placeholder="Full Name" required>

<input type="email" placeholder="Email Address" required>

<input type="password" placeholder="Password" required>

<input type="text" placeholder="Bank Account Code" required>

<button type="submit">Login</button>

</form>

</div>

</body>

</html>