<?php
//name severname:
$hostname='mysql';

//username to access the database of mysql
$username='tutorial';

//password of username
$password='secret';

//Access database name.
$dbname='tutorial';

try
{
    //create object and link PDO
    $conn= new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8",$username,$password);
    echo"kết nối thành công";
}
catch(PDOException $e)
{
    echo"Lỗi kết nối cơ sở dữ liệu<br>".$e->getMessage();
}












