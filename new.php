<?php
include "dbConnect.php";

$word = $_POST['word'];
$url = $_POST['url'];
$r = strstr($url,"=");
$id = substr($r,1);

if($stmt = $conn->prepare("SELECT * FROM story WHERE id = ?")){
    $stmt ->bind_param("i", $id);
    $stmt ->execute();
    $stmt ->bind_result($idR,$story);
    $stmt->fetch();
    $stmt ->close();

}
$text = $story.' '.$word;

if ($stmt = $conn->prepare("UPDATE story SET story = ? WHERE id = ?")) {
    $stmt->bind_param("si", $text,$id);
    $stmt->execute();
    $stmt->close();
}