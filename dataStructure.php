<?php
function sortAscending($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);

    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++) {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++) {
            if ($mang[$j] < $mang[$min]) {
                $min = $j;
            }
        }

        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }

    // Trả về mảng đã sắp xếp
    return $mang;
}
function checkEquals($array, $array2)
{
    $array = sortAscending($array);
    $array2 = sortAscending($array2);
    if (count($array) == count($array2)) {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] != $array2[$i]) {
                return false;
                die;
            }

            return true;
        }
    } else {
        return false;
    }
}
function normalize($str){
    $str=str_replace('  ',' ',$str); 

    return $str;
}
function numberToRoman($number) {
    $map = array('M' => 1000,'CM' => 900,'D' => 500,'CD' => 400,'C' => 100,'XC' => 90,'L' => 50,'XL' => 40,'X' => 10,'IX' => 10,  'V' => 5,'IV' => 4,  'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
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
echo"chuỗi sau khi xóa khóa trắng: ". normalize(" ab   cdef   g "); // Return "ab cdef g"
echo "<br>";

//## Integer to Roman
echo "Số la mã: ".numberToRoman(3999);//MMMCMXCVIV
