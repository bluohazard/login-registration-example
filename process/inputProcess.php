<?php
session_start();
include "../config/connection.php";

$nama           = $_POST["nama"];
$jenis_kelamin  = $_POST["jenis_kelamin"];
$alamat         = $_POST["alamat"];
$no_hp          = $_POST["no_hp"];
$email          = $_POST["email"];

$queryInsert = "INSERT INTO registration VALUES('$nama','$jenis_kelamin','$alamat','$no_hp','$email')";

if (mysqli_query($con, $queryInsert)) {
    $message = "Insert berhasil dilakukan";
    header("Location: ../module/form.php?message=$message");
} else {
    $error = "*Insert tidak dapat dilakukan";
    header("Location: ../module/form.php?error=$error");
}
