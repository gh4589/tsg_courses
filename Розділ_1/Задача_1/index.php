<html>
<head>
    <title>Задача_3</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

$time = date('H');
$time2 = date('11:00');
$time3 = date('3:00');

if ($time3 >=$time & $time2 < $time) {
    echo "Привіт, світ!";
} else {
    echo "Добрий ранок, світ!";
}
?>

</body>
</html>