<?php
/*在 PHP 中，array() 函数用于创建数组：
    在 PHP 中，有三种类型的数组：
    数值数组 - 带有数字 ID 键的数组
    关联数组 - 带有指定的键的数组，每个键关联一个值
    多维数组 - 包含一个或多个数组的数组*/

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<hr/>";
//1.获取数组的长度 count()
echo count($cars);
echo "<hr/>";
//2.遍历打印数组，for循环
for($i=0;$i < count($cars);$i++){
    echo $cars[$i];
    echo "<br/>";
}
