<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача_2</title>
</head>
<body>
    

// 2. Напишіть скрипт, який використовує HTML-форму для введення емейла користувача, який буде перевіряти правильність введення натупним чином:
// Емейл повинен містити символ "@" та хоча б одну крапку після собачки, але не останній символ. Виведіть відповідні повідомлення, правильна чи не правильна електронна адреса.

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Email<input type="email" name="email"><br>
    <input type="submit">
</form>

<?php

$email = $_POST['email'];

if(preg_match("
|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i"
, $email
)){
echo "e-mail коректний";
}else{
echo "e-mail не коректний";
}
?>
</body>
</html>