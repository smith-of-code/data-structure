<?php
$arr = [];
//генерим массив
for ($i=1; $i < 1000; $i++){
    if ($i == 999){ //пропущенное число
        echo "number". $i;
    }else{
        $arr[] = $i;
    }
}


function binarySearch ($myArray) {

    $left = 0;
    $right = count($myArray)-1;

    $n = 0;

    while ($left <= $right) {
        $n++;

        $middle = floor(($left + $right)/2);
        echo "Проверяется элемент с индексом: $middle".PHP_EOL;


        if ($myArray[$middle] == $middle + 1) { //сравниваем индекс и число

            if ($myArray[$middle] + 1 != $myArray[$middle + 1 ]){ //проверяем следующее число
                return "пропущенное число". ($myArray[$middle] + 1);
            }elseif ($myArray[$middle] - 1 != $myArray[$middle - 1 ]){ //проверяем предыдущее число
                return "пропущенное число". ($myArray[$middle] - 1);
            }

            $left = $middle + 1;
        }else {
            if ($myArray[$middle] - 1 != $myArray[$middle - 1 ]){
                return "пропущенное число". ($myArray[$middle] - 1);
            }
            $right = $middle - 1;
        }

           }
    echo "КОЛИЧЕСТВО ИТЕРАЦИЙ: $n".PHP_EOL;
    return null;

}

echo binarySearch($arr);