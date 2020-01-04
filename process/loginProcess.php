<?php
session_start();
include "../config/connection.php";

$username = $_POST["username"];
$password = $_POST["password"];

$queryUser = "SELECT * FROM user WHERE username='$username'";
$resultUser = mysqli_query($con, $queryUser);

if (mysqli_num_rows($resultUser) == 1) {
    $row = mysqli_fetch_assoc($resultUser);

    if ($password != $row["password"]) {
        $error = "Wrong password!";
        header("Location: ../index.php?error=$error");
    } else {
        $_SESSION["username"] = $row["username"];
        header("location: ../module/form.php");
    }
} else {
    $error = "Username not found!";
    header("Location: ../index.php?error=$error");
}
