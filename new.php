<?php
$word = $_POST['word'];
//echo $word;

$servername = "fixphotocffix.mysql.db";
$username = "fixphotocffix";
$password = "Cubugybuf1";
$dbname = "fixphotocffix";

                // Create connection
                $conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM story";
$t = $conn->query($sql);
$row = $t->fetch_assoc();
$text = $row['story'].' '.$word;
$tt = mysqli_real_escape_string($text);
$sql2 = "UPDATE story SET story='$tt' WHERE id=2";

header('Location: http://fixphoto.pl/');

$conn->query($sql2);

$conn->close();