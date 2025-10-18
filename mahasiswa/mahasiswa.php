<?php
include('../config/database.php');
$id = $_GET['id'];
mysqli_query($conn, "UPDATE mahasiswa SET deleted_at=NOW() WHERE id=$id");
header("Location: index.php");
?>
