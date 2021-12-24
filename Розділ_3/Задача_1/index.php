<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача_1</title>
</head>
<body>

<div class="container">
<h1>Введіть дані автомобіля</h1>
<div class="container__inner">
<div class="container__form-select">
<form action="" method="get">

<select name="fuel_type" id="">

    <option value="50">Бензин</option>
    <option value="75">Дизель</option>

</select>
</div>

<div class="container__form-input">
    Введіть обєм двигуна :<input type="text" name="capacity"  method="get">
    Введіть рік випуску авто: <input type="text" name="age" method="get">
    Введіть вартість авто: <input type="text" name="price" method="get">

    <button style="margin-top:10px;" type="submit">Відправити</button>
</div>


</form>
</div>
<h5 class="form__result"> 

<?php  include('php_ini.php') ?>

</p>
<h4 class="form-discription">Примітка: Даний скрипт обчислить суму акцизу</br>
Авто не повинно бути старше за 1970 рік.<br>
Наприклад:<br>
          Об’єм двигуна: 1800 куб.см <br>
          Рік випуску: 2000 <br>
          Вартість авто за кордоном в Євро: 1000 
</h4>
</div>
<style>

.container__inner{
   display: flex;
   justify-content: center;
   margin-top: 50px;
   margin-right: 60px;

}

.form__result{
color: red;
font-size: 18px;
font-weight: 700;
}

input{
    display: block;
    margin-left: 10px;
    margin-top: 5px;

}

.container{
    text-align: center;
}

</style>
</body>
</html>