<?php
class ExerciseString
{
    public $check1,$check2, $stringCount  = "";
    public $readFile = "file.txt";
    public $writeFile = "result_file.txt";
    public function readFile($fileName)
    {
        return file_get_contents($fileName);
    }

    function checkValidString($getString, $notContain, $contain)
    {
        if (strstr($getString, $notContain) == false && strstr($getString, $contain) == true) {
            return true;
        } else {
            return false;
        }
    }

    public function setText($fileName, $notContain, $contain,  $showNumberOfSentence = true)
    {

        $string = $this->readFile($fileName);
        $isValid = $this->checkValidString($string, $notContain, $contain);
        if ($showNumberOfSentence) {
            $this->stringCount = count(explode('.', $string)) . " là số câu của đoạn văn";
        }
        if ($isValid) {
            return " hợp lệ ". $this->stringCount;
        }
        return " không hợp lệ " . $this->stringCount;
    }

    function writeFile($notContain, $contain)
    {
        $this->check1 = "check1 la chuoi" . $this->setText("file1.txt", $notContain, $contain,false);
        $this->check2 = "check2 la chuoi" . $this->setText("file2.txt", $notContain, $contain);
        file_put_contents($this->writeFile, ""); //delete file content
        file_put_contents($this->writeFile, [$this->check1, $this->check2]); //write file content
        echo "<br>";
        echo $this->check1;
        echo "<br>";
        echo $this->check2;
    }
}






// PracticeOop1. count(explode('.', $getString)) .
$getExerciseString = new ExerciseString();
$getExerciseString->writeFile("book", "Lorem");
// check1 la chuoi không hợp lệ
// check2 la chuoi không hợp lệ 3 là số câu của đoạn văn
