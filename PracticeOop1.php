<?php
class ExerciseString
{
    public $check1 = "";
    public $check2 = "";
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

    public function setText($fileName, $check = "")
    {
        $string = $this->readFile($fileName);

        return $this->checkValidString($string, $check);
    }

    public function getText($fileName, $check = "")
    {
        $this->check1 = $this->setText($fileName, $check);
        $this->check2 = $this->setText($fileName, $check);
        if ($this->check1 == true) {
            file_put_contents($this->writeFile, ""); //delete file content
            file_put_contents($this->writeFile, $this->check1); //write file content
        } else {
            $this->check1 = "Chuỗi không hợp lệ";
            file_put_contents($this->writeFile, ""); //delete file content
            file_put_contents($this->writeFile, $this->check1); //write file content
        }
        if ($this->check2 == true) {
            $this->check2 = "Hợp lệ";
            file_put_contents($this->writeFile, ""); //delete file content
            file_put_contents($this->writeFile, $this->check2); //write file content
        } else {
            $this->check2 = "Chuỗi không hợp lệ bao gồm " . count(explode('.', $this->readFile($fileName))) . " câu.";
            file_put_contents($this->writeFile, ""); //delete file content
            file_put_contents($this->writeFile, $this->check2); //write file content
        }
    }
}

$getExerciseString = new ExerciseString();

// PracticeOop1
$getExerciseString->getText("file1.txt", "Lorem1"); //check1
// echo "<br>";
$getExerciseString->getText("file2.txt", "Lorem"); //check1
