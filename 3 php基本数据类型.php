<?php
/*PHP 变量存储不同的类型的数据，不同的数据类型可以做不一样的事情。
PHP 支持以下几种数据类型:
    String（字符串）
    Integer（整型）
    Float（浮点型）
    Boolean（布尔型）
    Array（数组）
    Object（对象）
    NULL（空值）
    Resource（资源类型）*/

//PHP 字符串 可以由双引号或者单引号定义
/*$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'ello world';
echo $x;*/

//php整型
/*整数是一个没有小数的数字。
整数规则:
    整数必须至少有一个数字 (0-9)
    整数不能包含逗号或空格
    整数是没有小数点的
    整数可以是正数或负数
    整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。*/
$x = 8989;
var_dump($x);
/*PHP 浮点型
浮点数是带小数部分的数字，或是指数形式。*/
echo "<br/>";
$y = 10.8;
var_dump($y);

//布尔类型
$a = true;
$b = false ;
//数组
echo "<br/>";
$c = array(1,"a","aaaa");
var_dump($c);
