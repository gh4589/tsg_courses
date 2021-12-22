<html>
<head>
    <title>Задача 3</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть параметри піраміди від 1 до 15: </br> <input type="text" name="data"><br>
    <input class="button" type="submit">
</form>

<div class="container">
<div class="container__inner">
<span class="inner_pyramid">
<?php
 // Отримуємо дані із зформи та очищаємо від пробілів
 $data = trim($_POST['data']);
 // Перевіряємо чи задані параметри правильні та запускаємо цикл
 //У випадку неправильно введених параметрів виводимо повідомлення 
 if ( !empty($data) && $data<=15) {
  for($i=1;$i<=$data;$i++){
    for($n=1;$n<=$i;$n++){
                echo "#";
    } echo "<br />"; }
  } else {
      echo 'Задана неправильна висота.';
    }
?>
</span>
</div>
</div>
<!-- CSS стилі -->
<style>
  .container{
width: 50%;
min-height: 20px;
border: 2px solid black;
  }
  .container__inner{
    text-align: right;
  }
  .button{
    margin-top: 10px;
  }

</style>
<!-- ------------------------------------------------ -->
</body>
</html>