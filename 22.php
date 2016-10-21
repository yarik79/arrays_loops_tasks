<?php

/**
22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
 */

$i = 1;
$k = 1;
while($i <= 5){
    $k = 1;
    while($i >= $k){
        echo 'xx';
        $k++;
    }
    echo "</br>";
    $i++;
}

//или так

$s=5;
for($i = 1; $i <= $s; $i++){
    for($n = 0; $n < $i; $n++){
        echo "xx";
    }
    echo "</br>";
}