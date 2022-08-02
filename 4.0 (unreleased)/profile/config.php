<?php 

$conn = mysqli_connect("sql2.7m.pl", "blazen1_gdpshub3", "gk2d5vpiyuav2qcw", "blazen1_gdpshub3");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


// Get data to display on index page
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);


?>