<?php
trait Active
{
    public function getClas()
    {
        return get_class($this);
    }
}
interface Boss
{
    //public function checkValidSlogan();
}
class Country
{
    protected $slogan = "";
    public function sayHello($Hello = "Hello")
    {
        echo $Hello;
    }
}
class VietnamCountry extends Country implements Boss
{
    use Active;
    public function defindYourSelf()
    {
        return $this->getClas();
    }
    public function setSlogan($slogan = "")
    {
        $slogan = strtolower($slogan);

        return $this->slogan = $slogan;
    }
    public function checkValidSlogan()
    {
        if (strstr($this->slogan, 'vietnam') == true && strstr($this->slogan, 'hust') == true) {
            return true;
        } else {
            return false;
        }
    }
}
class EnglandCountry extends Country implements Boss
{
    use Active;
    public function defindYourSelf()
    {
        return $this->getClas();
    }
    public function setSlogan($slogan = "")
    {
        $slogan = strtolower($slogan);

        return $this->slogan = $slogan;
    }
    public function checkValidSlogan()
    {
        if (strstr($this->slogan, 'england') == true || strstr($this->slogan, 'english') == true) {
            return true;
        } else {
            return false;
        }
    }
}


$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();
$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

$englandCountry->sayHello(); // Hello
echo "<br>";
$vietnamCountry->sayHello("Xin chao"); // Xin chao
echo "<br>";

var_dump($englandCountry->checkValidSlogan()); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan()); // false

// --------------------------------------------------------------------
// Bonus
// Tạo Trait có tên 'Active'
// Sử dụng để in ra tên class sau khi chạy các lệnh sau (gợi ý: dùng get_class())
echo "<br>";
echo 'I am ' . $englandCountry->defindYourSelf();
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourSelf();
