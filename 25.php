<?php

/*
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
//print_r($arr);

//Находим макс. и мин. значения
$max_arr=max($arr);
$min_arr=min($arr);
/*
echo "<br>";
echo $max_arr. "<br>";
echo $min_arr. "<br>";
*/

//Меняем местами макс. и мин. значения
list($max_arr,$min_arr) = array($min_arr,$max_arr);
/*
echo "<br>";
echo $max_arr. "<br>";
echo $min_arr. "<br>";
*/

