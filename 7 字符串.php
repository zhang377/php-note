<?php
//字符串
//1.字符串的创建
$string = "hello php!";
echo $string;
echo "<hr/>";
//2.唯一的字符串运算符,并置运算符 (.) 用于把两个字符串值连接起来
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1." ".$txt2;
echo "<hr/>";
//3.strlen() 函数,返回字符串长度
echo strlen($txt1);
echo "<hr/>";
//4.strpos() 函数
/*strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。*/
echo strpos("Hello world!","world");