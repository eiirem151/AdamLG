<?php
$content = file_get_contents('https://breezy-home-609608.framer.app/');
$content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="/test.css" /></head>', $content);
echo $content;
