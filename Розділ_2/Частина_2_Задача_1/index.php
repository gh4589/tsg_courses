<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Частина_2_Завдання_1</title>
</head>
<body>
    
<!--
    Я прийняв рішенння поєднати ці два завдання 
    
1. Напишіть скрипт, який використовує HTML-форму для введення емейла користувача та буде перевіряти правильність за допомогою функції preg_match:
Емейл повинен містити символ "@" та хоча б одну крапку після собачки. Домен повинен мати 2-4 букви. Емейл повинен містити лише ,англійські букви, цифри та символи ".", "-", "_"
2. Напишіть скрипт, який використовує HTML-форму для введення емейла користувача, який буде перевіряти правильність введення натупним чином:
Емейл повинен містити символ "@" та хоча б одну крапку після собачки, але не останній символ. Виведіть відповідні повідомлення, правильна чи не правильна електронна адреса.
-->
<?php

$email = $_POST['email'];

if(preg_match("
|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,4}$|i"
, $email
)){
echo "e-mail коректний";
}else{
echo "e-mail не коректний";
}
?>
</body>
</html>


