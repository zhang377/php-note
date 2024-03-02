<?php
/*PHP 变量比较，包含松散和严格比较。
    松散比较：使用两个等号 == 比较，只比较值，不比较类型。
    严格比较：用三个等号 === 比较，除了比较值，也比较类型。*/
if(42 == "42") {
    echo '1、值相等';
}

echo "<br/>"; // 换行符

if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、类型不相等';
}


echo "<br/>";
echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo "<br/>";
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo "<br/>";
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo "<br/>";
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo "<br/>";
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo "<br/>";
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo "<br/>";
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);
