<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача_2</title>
</head>
<body>
    
<?php

$M = array();

for ($N = 0; $N < 2; $N++):
  for ($i = 0; $i < 10; $i++):
    $M[$N][$i] = rand(0, 2000);
  endfor;
endfor;
 
echo '<pre>';
print_r($M);
echo '</pre>';
?>


</body>
</html>