<?php

/*2.Вам нужно создать массив и заполнить его случайными числами от 1 до 100. Далее,
вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не
парный индекс*/

$workArray = array();
$compositionPairElement = 1;

for ($i = 0 ; $i < 11 ; $i++){
    $workArray[$i] = mt_rand(1,100);

    if ($i%2==0){
        $compositionPairElement *= $workArray[$i];
    }
    
    else {
        echo $workArray[$i];
        echo '<br>';
    }
}

//echo '<pre>';
//print_r($workArray); //в условии задачи нет вывода этого значения
//echo '</pre>';

//echo '<br>';
//echo $compositionPairElement; //в условии задачи нет вывода этого значения

?>
