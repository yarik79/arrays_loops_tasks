<?php

/*
 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 а текущий день выведите курсивом.
 Текущий день должен храниться в переменной $day.
 */

$arr=array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day = date('l');
foreach($arr as $ar){
    if ($ar == $day){
        echo "<i> $ar </i> </br>";
    }else{
        echo($ar).'<br>';}
}
