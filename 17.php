<?php
/*
17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы,
а текущий месяц выведите жирным.
Текущий месяц должен храниться в переменной $month.
 */

$arr=array(
    'January', 'February', 'March', 'April', 'May', 'June', 'July',
    'August', 'September', 'October', 'November', 'December'
    );
$month = date("F");

foreach($arr as $ar){
    if ($ar == $month){
        echo "<b> $ar </b> </br>";
    }else{
        echo($ar).'<br>';}
}