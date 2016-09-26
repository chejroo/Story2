<?php
include "dbConnect.php";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM story";

$result = $conn->query($sql);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row['story'];
                    }
                } else {
                    echo "0 results";
                }
$conn->close();
?>