<?php
include "dbConnect.php";
//PAMIĄTKA
//$id2 = substr($_SERVER['QUERY_STRING'] , 3);
//
//if(isset($_POST['url'])){
//    $url = $_POST['url'];
//    $r = strstr($url,"=");
//    $id = substr($r,1);
//}else{
//    $id = substr($_SERVER['QUERY_STRING'] , 3);
//}

$id = $_POST["id"];

if($stmt = $conn->prepare("SELECT * FROM story WHERE id = ?")){
    $stmt ->bind_param("i", $id);
    $stmt ->execute();
    $stmt ->bind_result($idR,$story);
    $stmt->fetch();
    $stmt ->close();

}echo $story;

$conn->close();
?>