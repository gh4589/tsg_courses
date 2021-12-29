
<?php

 $listofnames = trim($_GET['listofnames']);

 setlocale(LC_ALL, 'ua_UA.UTF-8');
 $pattern = preg_match('/[А-Яа-я^,]+$/', $listofnames);
 if ($listofnames == $pattern){
 
     echo 'this is text not ok';
 
 }else {
 
    $listofnames = explode(",", $listofnames);

    sort($listofnames,SORT_FLAG_CASE|SORT_NATURAL);

    print_r($listofnames);

     }
 
     