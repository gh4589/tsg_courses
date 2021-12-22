<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Розділ-2 Завдання-1</title>
</head>
<body>

<!--  1. Напишіть скрипт, який використовує HTML-форму для введення списку імен через кому, та виведе цей список замінивши "," на ";". -->

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Список імен через кому <input type="text" name="name"><br>
    <input type="submit">
</form>

<?php

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    $string = trim(preg_replace('/,/',';',$name));

    echo "Hello<br> $string<br>";
}
?>
</body>
</html>