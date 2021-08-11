<?php
$readFile1 = "file1.txt";
$readFile2 = "file2.txt";
function checkValidString($getString, $notContain, $contain)
{
    if (strstr($getString, $notContain) == false && strstr($getString, $contain) == true) {
        echo "Chuỗi  hợp lệ";

        return true;
    } else {
        echo "Chuỗi  không hợp lệ";

        return false;
    }
}

function getCheckfile($getString, $notContain, $contain)
{
    if (checkValidString($getString, $notContain, $contain) == true) {
        echo "Chuỗi  hợp lệ. chuỗi bao gồm " . count(explode('.', $getString)) . " câu.";
    } else {
        echo "Chuỗi  không hợp lệ";
    }
}

// lesson 1
checkValidString(file_get_contents($readFile1), "restaurant", "Lorem");
// lesson 2
getCheckfile(file_get_contents($readFile1), "restaurant", "Lorem");
