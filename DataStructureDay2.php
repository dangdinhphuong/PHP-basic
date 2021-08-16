<?php


$price = 210;
$rivalryPrice = 1200;
$stepPrices = [
    100  => 40,
    300  => 60,
    500  => 80,
    1000 => 120,
    1500 => 150,
];
$calendar = [
    false, // tương đương với ngày 0
    false, // tương đương với ngày 1
    true,  // tương đương với ngày 2
    true,  // tương đương với ngày 3
    false, // tương đương với ngày 4
    false, // tương đương với ngày 5
    true,  // tương đương với ngày 6
    true, // tương đương với ngày 7
];


function calcMinPrice($price, $stepPrices, $rivalryPrice)
{
    $a = 0;
    $b = 0;
    while ($a <= $rivalryPrice) {
        if ($stepPrices[100] <= $price && $price < 300) {
            $a = $price + $stepPrices[100];
        } else if (300 <= $price && $price < 500) {
            $a = $price + $stepPrices[300];
        } else if (500 <= $price && $price < 1000) {
            $a = $price + $stepPrices[500];
        } else if (1000 <= $price && $price < 1500) {
            $a = $price + $stepPrices[1000];
        } else if (1500 <= $price) {
            $a = $price + $stepPrices[15000];
        }


        if ($rivalryPrice >= $a) {
            if (100 <= $a && $a < 300) {
                $b = $a + $stepPrices[100];
                $price = $b;
            } else if (300 <= $a && $a < 500) {
                $b = $a + $stepPrices[300];
                $price = $b;
            } else if (500 <= $a && $a < 1000) {
                $b = $a + $stepPrices[500];
                $price = $b;
            } else if (1000 <= $a && $a < 1500) {
                $b = $a + $stepPrices[1000];
                $price = $b;
            }
            echo $a . '=' . $b;
            echo "<br>";
        }
    }
}
function calcDeadline($manday, $calendar)
{
    $count = 0;
    $deadline = 0;
    for ($i = 0; $i < count($calendar); $i++) {
        if ($calendar[$i] === false) {
            $count++;
            $deadline = $i;
        }
    }
    
    echo $deadline . "===" . $count;
}
//## Bài toán đấu giá
calcMinPrice(210, $stepPrices, 1200);

//## Bài dự tính deadline
calcDeadline(5, $calendar);
