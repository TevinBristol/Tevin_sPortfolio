<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equic="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tevo Kicks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="shortcut icon" href="image/TevoKicks.png">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     <br>
     <a href="tevokicks.html">TevoKicks</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>