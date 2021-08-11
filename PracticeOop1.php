<?php
class ExerciseString
{
    public $check1 = "checkValidSlogan";
    public $check2 = "restaurant";
    public $readFile = "file.txt";
    public $writeFile = "result_file.txt";
    public function readFile($fileName)
    {
        return file_get_contents($fileName);
    }

    public function checkValidString($string, $contain)
    {
        if (strstr($string, $contain) == true) {
            return true;
        } else {
            return false;
        }
    }
    public function getValidString($string, $check1 = "", $check2 = "")
    {
        if ($check1 != "") {
            if ($this->checkValidString($string, $check1) == true) {
                echo "Hợp lệ";
                file_put_contents($this->writeFile, $check1);
            } else {
                echo "Chuỗi không hợp lệ";
            }
        }
        if ($check2 != "") {
            if ($this->checkValidString($string, $check2) == true) {
                echo "Chuỗi  hợp lệ, chuỗi bao gồm " . count(explode('.', $string)) . " câu.";
                file_put_contents($this->writeFile, $check1);
            } else {
                echo "Chuỗi không hợp lệ";
            }
        }
    }
}

$getExerciseString = new ExerciseString();
// PracticeOop1
$getExerciseString->getValidString($getExerciseString->readFile($getExerciseString->readFile), $getExerciseString->check1);//check1
echo"<br>";
$getExerciseString->getValidString($getExerciseString->readFile($getExerciseString->readFile), "", $getExerciseString->check2);//check2
