<?php

function myTest()
{
    //当一个函数完成时，它的所有变量通常都会被删除。为了某个局部变量不被删除。在第一次声明变量时使用 static 关键字：
    static  $x = 0;
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}

myTest();
//myTest();
//myTest();
$b = 3;
echo $b,"<br>";
$b++;
echo $b;

