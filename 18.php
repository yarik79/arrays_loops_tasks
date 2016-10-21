<?php

/*
18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
 */

$arr=array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

foreach($arr as $ar){
    if ($ar == 'Saturday' || $ar == 'Sunday'){
        echo "<b> $ar </b> </br>";
    }else{
        echo($ar).'<br>';}
}