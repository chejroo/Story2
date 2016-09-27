<?php
$id_story = $_POST["id_story"];
$name = $_POST["name"];

include "dbConnect.php";

if ($stmt = $conn->prepare("INSERT INTO authors (id,id_story,author) VALUES (NULL,?,?)")){
    $stmt->bind_param("is",$id_story, $name);
    $stmt->execute();
    $stmt->close();
}
$conn->close();