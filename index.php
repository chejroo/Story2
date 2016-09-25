<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>historyjka</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--<link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>-->
    <!--<script src="css/jquery-3.1.0.min.js"></script>-->
    <script src="css/jquery-3.1.0.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="col s12 logo">
    <p>HISTORYJKA</p>
</div>

<div class="container">
    <div class="row">

        <div class="col s12">
            <div class="card q1">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "fixphotocffix";

                // Create connection
                $conn = new mysqli($servername, $username, $password,$dbname);

                $sql = "SELECT * FROM story";

                $result = $conn->query($sql);
                // Check connection
//                if ($conn->connect_error) {
//                    die("Connection failed: " . $conn->connect_error);
//                }
//                echo "Connected successfully";

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
            </div>
        </div>
        <div class="row">
            <form class="col s12" action="new.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="word" name="word" type="text" onkeypress="max()" length="10">
                        <label for="input_text">Twoje słowo</label>
                    </div>
                    <button class="btn waves-effect waves-light btn-large sendBtn " type="submit" name="action">
                        <input type="submit" value="Dodaj">
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <script src="main.js"></script>
</body>