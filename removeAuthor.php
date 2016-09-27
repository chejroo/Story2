<?php
include "dbConnect.php";
$name = $_POST["name"];
if ($stmt = $conn->prepare("DELETE FROM authors where author = ? ")) {
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $stmt->close();
    echo "OK";
}else{
    echo "bład";
}

$conn->close();