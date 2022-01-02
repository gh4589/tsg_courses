<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$a = array(
    1 => 'one',
    'twho',
    'true' => true,
    'three' => 3,
    -10 => "four",
    'multi' => array(0.1,0.2,0.3),
    array(
        'key1' => 'one',
        'key2' => 'two',
    )
    );

echo '<pre>';
print_r($a);
echo '<pre>';


$c = array(
    1 => 'one',
    'twho',
    'true' => true,
    'three' => 3,
    -10 => 'four',
    'multi' => array(0.1,0.2,0.3,0.4),
    array(
        'key1' => 'one',
        'key2' => 'two',
    )
    );


    echo '<pre>';
    print_r($c[2]);
    echo '<pre>';

    echo '<pre>';
    print_r($c['multi'][2]);
    echo '<pre>';

    echo '<pre>';
    print_r($c[4]);
    echo '<pre>';

?>

<?php
 
 $f = array(
     1 => 'one',
     'twho',
     true => 'true',
     'three' => 3,
     -10 => 'four',
     'multi' => array(0.1,0.2,0.3,0.4),
     array(
         'key1' => 'one',
         'key2' => 'two', 
     )
     );

 $f[] = 'five';
 $f['multi']['key3'] = 'three';
 $f[100] = 100;
 $a[] = 'test';


echo '<pre';
print_r($f);
echo '<pre';

?>

<?php
 
 $arr = array('Toyota','Mitsubishi');

 array_push($arr,"KIA",'Hyundai');
 $car = array_shift($arr);

 var_dump($arr);
 echo '<br>';
 var_dump($car);
 echo '<br>';
?>

<?php
$array = explode(',','Січень,лютий,березень,квітень,травень');
var_dump($array);
echo '<br>';
$array2 = explode(" ",'Розібємо цей рядок по пробілах та перетворимо на масив');
var_dump($array2);
?>
<?php


// $array3 = array(
//     'one' => 'Apple',
//     'two' => 'Grusha',
//     'three' => 'Sliva',
// );

// echo implode( ",",$array3);
// echo '<br>';
// echo implode(";",$array3);
// echo '<br';
// ?>

// <?php
 
 $fruits = [
     0 => 'Apple',
     1 => 'Grusha',
     2 => 'Sliva',
     3 => 'Banan',
     4 => 'Abrykos'
 ];


 var_dump(array_search('Apple',$fruits));
 var_dump(array_search('abrykos',$fruits));

?>

<?php
 
$x = array(1,2,3,4,5,6,7,8);

var_dump(array_slice($x,3,2));
echo '<br>';
var_dump(array_slice($x,-5,2));
echo '<br>';
var_dump(array_slice($x,-4,-1));
echo '<br>';

?>



</body>
</html>