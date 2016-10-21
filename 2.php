<?php
/*
2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
С помощью цикла foreach найдите сумму элементов этого массива.
Запишите ее в переменную $result.
 */

$result = 0;
$arr = array(1, 20, 15, 17, 24, 35);

foreach ($arr as $value) {
    $result += $value;
}
echo $result;