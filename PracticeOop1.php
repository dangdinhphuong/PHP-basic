<?php
class ExerciseString
{
    public $Check1 = "checkValidSlogan";
    public $Check2 = "restaurant";
    public $readFile = "file.txt";
    public $WriteFile = "lidn.txt";
    public $Content = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut doloribus asperiores beatae explicabo delectus itaque odio hic, natus soluta debitis.";
    public function readFile()
    {
        return file_get_contents($this->readFile);
    }
    public function checkValidString($String,$Contain)
    {
        if (strstr($String, $Contain) == true) {
            echo "Chuỗi  hợp lệ, chuỗi bao gồm " . count(explode('.', $String)) . " câu.";
            file_put_contents($this->WriteFile, $this->Content);

            return true;
        } else {
            echo "Chuỗi  không hợp lệ";

            return false;
        }
    }
}

$getExerciseString = new ExerciseString();
// PracticeOop1
$getExerciseString->checkValidString($getExerciseString->readFile(),$getExerciseString->Check1);