
<?php



 $listofnames = trim($_GET['listofnames']);

 $explode = explode(',', $listofnames);

 header('Content-type: text/html; charset=utf-8');

 $locale_time = setlocale (LC_TIME, 'ru_RU.UTF-8', 'Rus');
 
 function strf_time($format, $timestamp, $locale)
 {
     $date_str = strftime($format, $timestamp);
     if (strpos($locale, '1251') !== false)
     {
         return iconv('cp1251', 'utf-8', $date_str);
     }
     else
     {
         return $date_str;
     }
 }


 function compareByName($a,$b) {
    if($a == $b) return 0;
    return $a > $b ? 1 :  -1;
  }

  usort($explode, 'compareByName');

echo '<pre>';

print_r($explode);

echo '</pre>';

?>