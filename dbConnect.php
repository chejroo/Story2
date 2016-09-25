<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Curatius - baza rozwozu</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--<link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="jquery-3.1.0.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
<table class="ui fixed table">
    <thead class="orange">
    <tr><th>Adres</th>
        <th>Numer</th>
        <th>Inne</th>
        <th>Kontakt</th>
        <th>Opis</th>
    </tr></thead>
    <tbody>
    <?php
    $servername = "fixphotocffix.mysql.db";
    $username = "fixphotocffix";
    $password = "Cubugybuf1";
    $dbname = "fixphotocffix";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    $sql = "SELECT * FROM apteki";

    $result = $conn->query($sql);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    function checkbox($var,$id){
        if ($var == 0){
            $text = "<input type='checkbox' id=".$id." /><label for=".$id.">Telefon został wykonany</label>";
            return $text;
        }elseif ($var == 1){
            $text = "<input type='checkbox' id=".$id." checked=\"checked\" /><label for=".$id.">Telefon został wykonany</label>";
            return $text;
        }
    }

    function opis($var){
        if (strlen($var) == 1){
            $text = "<button class='btn waves-effect waves-light' type='submit' name='action'>Dodaj<i class='material-icons right'>send</i></button>";
            return $text;
        }else{
            $text = "<button class='btn waves-effect waves-light green' type='submit' name='action'>Sprawdź<i class='material-icons right'>send</i></button>";
            return $text;
        }
    }

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["adres"]. "</td><td>" . $row["numer"]. "</td><td>". $row["inne"]. "</td><td>".checkbox($row["kontakt"],$row["id"])."</td><td>".opis($row["opis"]). "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </tbody>
</table>
<script src="main.js"></script>
</body>
