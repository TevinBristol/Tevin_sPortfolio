<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']); // No need to hash the password
    $name = validate($_POST['name']);

    if (empty($uname)) {
        header("Location: register.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: register.php?error=Password is required");
        exit();
    } elseif (empty($name)) {
        header("Location: register.php?error=Name is required");
        exit();
    } else {
        $sql = "INSERT INTO kicksusers (user_name, password, name) VALUES ('$uname', '$pass', '$name')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['user_name'] = $uname;
            $_SESSION['name'] = $name;
            $_SESSION['id'] = mysqli_insert_id($conn); // Get the ID of the newly inserted user
            header("Location: home.php");
            exit();
        } else {
            header("Location: register.php?error=Registration failed. Please try again later.");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>