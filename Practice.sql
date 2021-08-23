-- delete --
DELETE FROM `tutorial`.`categories` WHERE NOT EXISTS (SELECT * FROM `tutorial`.`items` WHERE `categories`.`id` = `items`.`category_id`);

-- sum--
SELECT `categories`.*,sum(`items`.`amount`) as "Tổng số amount của item"
from `tutorial`.`categories` 
inner join `tutorial`.`items` 
on `categories`.`id` = `items`.`category_id` GROUP BY `items`.`category_id` ;

--count--
SELECT `categories`.*, count(`items`.`category_id`) as "Số lượng danh mục"
from `tutorial`.`categories` 
inner join `tutorial`.`items` 
on `categories`.`id` = `items`.`category_id` GROUP BY `items`.`category_id` ;

--amount > 40--
SELECT`tutorial`.`categories`.*,`items`.`amount` 'Số lượng amount lớn hơn 40'
from `tutorial`.`categories`
inner join `tutorial`.`items`
on `categories`.`id` =  `items`.`category_id` where `items`.`amount`> 40  ;