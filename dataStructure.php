<?php
function checkEquals($array, $array2)
{
    sort($array);
    sort($array2);
    if ($array == $array2) {
        return true;
    } else {
        return false;
    }
}
function normalize($str)
{
    $str = str_replace('  ', ' ', $str);

    return $str;
}
function numberToRoman($number)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 10,  'V' => 5, 'IV' => 4,  'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if ($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
//## CheckEquals
var_dump(checkEquals([1, 2, 3], [3, 1, 2])); // Return true
echo "<br>";
var_dump(checkEquals([1, 2, 5, 2], [5, 2, 1, 2])); // Return true
echo "<br>";
var_dump(checkEquals([1, 3, 5, 2], [5, 2, 1])); // Return false
echo "<br>";

//## String Normalization
echo "chuỗi sau khi xóa khóa trắng: " . normalize(" ab                                  cdef   g "); // Return "ab cdef g"
echo "<br>";

//## Integer to Roman
echo "Số la mã: " . numberToRoman(3999);//MMMCMXCVIV
