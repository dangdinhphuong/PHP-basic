<?php
$readFile1 = "file1.txt";
$readFile2 = "file2.txt";
function checkValidString($getString, $notContain, $contain)
{
    if (strstr($getString, $notContain) == false && strstr($getString, $contain) == true) {
        return true;
    } else {
        return false;
    }
}

function getCheckfile($getString, $notContain, $contain)
{
    if (checkValidString($getString, $notContain, $contain) == true) {
        echo "Chuỗi  hợp lệ chuỗi bao gồm " . count(explode('.', $getString)) . " câu.";
    } else {
        echo "Chuỗi  không hợp lệ";
    }
}

// lesson 1
 var_dump(checkValidString(file_get_contents($readFile1), "book", "restaurant"));// false
echo"<br>";
var_dump(checkValidString(file_get_contents($readFile1),"restaurant", "book"));// true
echo"<br>";
// lesson 2
getCheckfile(file_get_contents($readFile1),"book", "restaurant");//Chuỗi không hợp lệ
echo"<br>";
getCheckfile(file_get_contents($readFile1), "restaurant", "book");//Chuỗi hợp lệ chuỗi bao gồm 5 câu.