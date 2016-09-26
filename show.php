<?php
include "dbConnect.php";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM story";
$t = $conn->query($sql);
$row = $t->fetch_assoc();

$conn->close();