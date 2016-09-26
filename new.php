<?php
$word = $_POST['word'];

include "dbConnect.php";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM story";
$t = $conn->query($sql);
$row = $t->fetch_assoc();
$rov = $row['id'];
$text = $row['story'].' '.$word;

if ($stmt = $conn->prepare("UPDATE story SET story = ? WHERE id = ?")) {
    $stmt->bind_param("si", $text,$rov);
    $stmt->execute();
    $stmt->close();
}
header('Location: http://localhost/story.php');
