<?phP
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
$count = 0;
$number_of_days = 0;
$deadline = 0;

function calcMinPrice($price, $stepPrices, $rivalryPrice)
{
    $a = 0;
    $b = 0;

    if (100 <= $price && $price < 300) {
        $a = $price + $stepPrices[100];
    } else if (300 <= $price && $price < 500) {
        $a = $price + $stepPrices[300];
    } else if (500 <= $price && $price < 1000) {
        $a = $price + $stepPrices[500];
    } else if (1000 <= $price && $price < 1500) {
        $a = $price + $stepPrices[1000];
    } else if (1500 <= $price) {
        $a = $price + $stepPrices[1500];
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
        calcMinPrice($price, $stepPrices, $rivalryPrice);
    }
}


function calcDeadline($manday, $calendar)
{
    global $count,$deadline,$number_of_days;
    if($manday>count($calendar)){
        return false;
    }
    if (isset($calendar[$count])) {
        if ($calendar[$count] === false) {
            $number_of_days++;
            $deadline = $count;
        }
        $count += 1;
        calcDeadline($manday, $calendar);
    }

     return "Hạn deadline ngày thứ: ".$deadline . "<br> Số ngày làm việc: " . $number_of_days;
}
//## Bài toán đấu giá
calcMinPrice(210, $stepPrices, 1200);

//## Bài dự tính deadline
echo(calcDeadline(5, $calendar));
