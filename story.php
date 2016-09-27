<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Story</title>
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
<body class="cc">
<img  class="q2" src="5.jpg">
<div class="container newStory">
    <div class="col s12 card storyContent">
        <div class="q3">
            <p>The story begins here ... </p>
            <hr>
        </div>
        <div class="q35" id="q35">

        </div>
        <div class="q4" id="q4">

        </div>
        <div class="q5">
            <ul>

            </ul>
        </div>
    </div>
    <div class="input-field col s6">
            <div class="row f1">
                <div class="input-field col s7">
                    <input id="word" name="word" type="text" length="10">
                    <label for="input_text">Your world</label>
                </div>
                <button class="btn-large waves-effect waves-light sendBtn" id="submit" name="action">Send
                    <i class="material-icons right">send</i>
                </button>
            </div>
    </div>
</div>
<script src="main.js"></script>
<script src="story.js"></script>
</body>
</html>