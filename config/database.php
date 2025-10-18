<?php
$host = "localhost";
$user = "root"; // default XAMPP user
$pass = "";
$db   = "web2_uts";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
