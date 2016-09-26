<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Story</title>
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
    <img src="story22.png" alt="the story">
</div>
<div class="container">
    <div class="row">
        <div class="col s12 w1">
            <a class="waves-effect waves-light btn-large create"><i class="material-icons right">new</i>Create a new <span style = "color: orange">story</span></a
        </div>
    </div>
    <div class="col s12 card w2">
        <p class="authorName center">Every story has to have author.</p>
        <form class="col s12" action="story.php" method="get">
            <div class="input-field col s9 ">
                <input placeholder="" id="authorName" type="text" name="author" class="validate">
                <label for="first_name">Your Name</label>
            </div>
            <button class="btn cyan darken-3 waves-effect waves-light btn-large b1 " id="submitt" type="submit" name="action">
                <input type="submit" id="submit" value="Let's start">
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
    <script src="main.js"></script>
</body>