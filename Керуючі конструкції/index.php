<html>
<head>
    <title>Задача 3</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
   <p title="Цілі числа через кому від одного до 100"> Введіть дані: </p><input type="integer" name="data"><br>
    <input class="button" type="submit" ">
    </form>
    <div class="container"> 
    <span  class="diagram">
    <?php

$data = $_POST['data'];


$data = trim($_POST['data']);


$array = explode(',',$data);

     foreach($array as $value){

    $a = $value;

    if (preg_match ('/([a-zA-Zа-яёА-ЯЁ])|([\/:*?"\'<>|\.%@\-\~ ])/', $a) ||  $a > 100 || $a == 0 )  {

        echo '<h3 style="backgraund-color:none!important; ">Введено недопустимий символ </br>
        <h4 style="color:red;">
        ЗВЕРНІТЬ УВАГУ</br> В форму потрібно вводити через кому "," цілі числа від 1 до 100</h4>
        </h3>';

        break;
    
    } elseif (preg_match('/[0-9-,]/',$a)|| ($a > 100 & $a == 0)) {
    
    
        for($i=0; $i <= $a; $i++){
    
        echo "<span>&nbsp;</span>"; 
    
        if($i == $a ){
    
            echo "<span>$a</span> <br> " ;
    
            break;
    
        }
    }
    }
    }
?>
    </span>
 
    <style>

        .button{
            margin-top: 10px;
        }
        

        p{
            margin-top: 20px;
        }

        .diagram{
            background: red;
            font-weight: 400;
    font-size: 1rem;
    line-height: 1.5rem;
        }
    </style>

</div>
</body>
</html>