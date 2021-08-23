<?php
require_once "connect.php";

function mysql($sql)
{
    global $stmt, $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

$count = "SELECT `categories`.*, count(`items`.`category_id`) as 'Số lượng danh mục'
from `tutorial`.`categories` 
inner join `tutorial`.`items` 
on `categories`.`id` = `items`.`category_id` GROUP BY `items`.`category_id` ";

$sum = "SELECT `categories`.*,sum(`items`.`amount`) as 'Tổng số amount của item'
from `tutorial`.`categories` 
inner join `tutorial`.`items` 
on `categories`.`id` = `items`.`category_id` GROUP BY `items`.`category_id`";

$amount="SELECT`tutorial`.`categories`.*,`items`.`amount` 'Số lượng amount lớn hơn 40'
from `tutorial`.`categories`
inner join `tutorial`.`items`
on `categories`.`id` =  `items`.`category_id` where `items`.`amount`> 40  ;";

$delete="DELETE FROM `tutorial`.`categories` WHERE NOT EXISTS (SELECT * FROM `tutorial`.`items` WHERE `categories`.`id` = `items`.`category_id`)";

// (count items)
mysql($count);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

// (sum items.amount)
mysql($sum);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

//amount > 40
mysql($amount);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

//detele
mysql($delete);