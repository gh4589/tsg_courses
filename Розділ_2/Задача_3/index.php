<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача_3</title>
</head>
<body>
    
<!-- 3. Напишіть скрипт, який використовує HTML-форму для введення прізвища імені та по-батькові користувача. Коли користувач надішле форму, скрипт повинен вивести ініціали. -->
<!-- Скрипт повинен працювати коректно, якщо користувач введе декілька пробілів та пробіли на початку і в кінці. Ініціали повинні виводитися великими літерами, навіть, якщо користувач набрав малими. -->
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше Ім’я<input type="text" name="first_name"><br>
    По-батькові<input type="text" name="sur_name"><br>
    Прізвище<input type="text" name="last_name"><br>
  

    <input type="submit">
</form>

<?php
//Отримуємо дані із форми та видаляємо пробіли
$first_name = trim($_POST['first_name']);
$sur_name = trim($_POST['sur_name']);
$last_name = trim($_POST['last_name']);



// Отримуємо ініціали в UTF-8
$initials = mb_substr($first_name, 0, 1) . mb_substr($sur_name, 0, 1). mb_substr($last_name, 0, 1);

//виводимо результат
echo "Hello, $initials!<br>";



?>
</body>
</html>