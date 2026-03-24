<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: dashboard.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Dashboard</title>
</head>

<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>You are logged in.</p>

<a href="home.php">Go to Home</a>

<br><br>

<a href="logout.php">Logout</a>

</body>

</html>