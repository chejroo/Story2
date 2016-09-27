<?php
$id_story = $_POST["id_story"];

include "dbConnect.php";

if ($stmt = $conn->prepare("SELECT * FROM authors where id_story = ?")){
    $stmt->bind_param("i",$id_story);
    $stmt->execute();
    $stmt->bind_result($id,$id_story,$author);
    while ($stmt->fetch()){
        printf ("<li> %s </li>",$author);
    }
    $stmt->close();
}
$conn->close();