<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Частина_2_Завдання_2</title>
</head>
<body>
<?php
$text = "Sample sentence from KomunitasWeb, regex has become popular in web programming. Now we learn regex. According to wikipedia, Regular expressions (abbreviated as regex or regexp, with plural forms regexes, regexps, or regexen) are written in a formal language that can be interpreted by a regular expression processor";
 
$text =  preg_replace(
    "/\b(regex)\b/i", 
	'<a href="http://example.com" ">$1</a>', $text
);

echo $text;
?>;
</body>
</html>