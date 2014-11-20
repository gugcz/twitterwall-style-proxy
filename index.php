<?php

$url = "http://devtest.tweetwally.com/iphone";
$styleFile = "style.css";

$content = file_get_contents($url);

$base = "<base href='$url'/>";
$style = "<link rel='stylesheet' href='http://$_SERVER[HTTP_HOST]/$styleFile'>";

$content = str_replace("</title>", "</title>\n$base\n<meta name='hack-author' content='JanVoracek'/>", $content);
$content = str_replace("</head>", "$style\n</head>", $content);
echo $content;