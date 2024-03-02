<?php
// if 语句
$x = date("H");
if ($x <10){
    echo "Have a good morning!";
}elseif ($x <20){
    echo "Have a good day!";
}else{
    echo "Have a good night!";
}


echo "<hr/>";

$favcolor="red";
switch ($favcolor)
{
    case "red":
        echo "你喜欢的颜色是红色!";
        break;
    case "blue":
        echo "你喜欢的颜色是蓝色!";
        break;
    case "green":
        echo "你喜欢的颜色是绿色!";
        break;
    default:
        echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
}