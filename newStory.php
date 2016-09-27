<?php
include "dbConnect.php";

if ($stmt = $conn->prepare("INSERT INTO story (id,story) VALUES (NULL , 'Once upon time, ')")) {
    $stmt->execute();
    $stmt->close();
}


if ($stmt = $conn->prepare("SELECT * FROM story order by id desc")) {
    $stmt->execute();
    $stmt->bind_result($id,$story);
    $stmt->fetch();
    $stmt->close();
}

session_start();
if(isset($_SESSION['author'])){
    $_SESSION["name"] = $_POST['author'];
    if(isset($_SESSION['title'])) {
        $_SESSION["title"] = $_POST['title'];
    }
    $title = $_SESSION["title"];
}

header('Location: http://localhost/story.php?id='.$id);
?>

