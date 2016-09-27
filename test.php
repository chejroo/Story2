<?php

$url = "http://localhost/story.php?id=2345345";
$r = strstr($url,"=");
$id = substr($r,1);