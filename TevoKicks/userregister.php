<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>User Registration</h2>
    <form action="register.php" method="POST">
        <?php if(isset($_GET['error'])) { ?>
            <p style="color: red;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="uname">Username:</label><br>
        <input type="text" id="uname" name="uname" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>