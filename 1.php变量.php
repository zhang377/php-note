<?php
/*
创建变量：
变量以 $ 符号开始，后面跟着变量的名称
变量名必须以字母或者下划线字符开始
变量名只能包含字母、数字以及下划线（A-z、0-9 和 _ ）
变量名不能包含空格
变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
*/
$iphone14 = 8888;
$xiaomi14 = 3333;
echo $xiaomi14 + $iphone14;

//局部变量和全局变量
$x = 10; //全局变量
function myTest()
{
    //在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
    global $x;//global 关键字用于函数内访问全局变量。
    $y=10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}
myTest();

//global  example:
$a = 1;
$b = 2;
function test0()
{
    global $a ,$b;
    echo "<br>", $a;
    echo "<br>";
    echo $b;
    echo $a + $b;
}
test0();