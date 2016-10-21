<?php

/*
13. Вывести таблицу умножения
 */

echo "<table border='1'> <tr>";
for ($x = 1; $x <= 10; $x++){
    echo "<td>";
    for ($y = 1; $y <= 10; $y++){
        echo $x. ' * ' .$y. ' = ' .($x*$y). '<br>';
    }
    echo "</td>";
}
echo "</tr> </table>";