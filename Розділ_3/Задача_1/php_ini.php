<?php

$capacity = trim($_GET['capacity']);
$age = trim($_GET['age']);
$price = trim($_GET['price']);

if (
    $age != preg_match('/[0-9]/', $age)||
    $capacity != preg_match('/[0-9]/',$capacity)||
    $price != preg_match('/[0-9]/', $capacity)
){

    

$capacityK = (int)$capacity / 1000 ;
$date = date("Y")-1;
$s1clean = str_replace(chr(151), '', $date);
(int)$ageA = (int)$age - 1 ; 
$ageK = $ageA - (int)$s1clean;
$array = (int)$_GET['fuel_type'];

if ($date <= $age || $age >= 1970){
$result = $array * $capacityK * (int)$ageK ;

    echo " Акцизний збір становить $result"; 
}else{
    
    echo '<h4 style = "color:red;">Авто повинно бути не старше 1970 р.в.</h4>';

}

}else{

    echo '<h4 style = "color:red;">Введені дані некоректні <br>
          Дивіться приклад приведений нижче 
          </h4>
    ';

}

?>