<?php
error_reporting(-1);

//string
echo "STRING <br> <br>";
$name = "SsS";
$name2 = "СсС";
echo gettype($name) . "<br>";
echo is_string($name2) , "<br>";

echo var_dump($name) . "<br>";
echo var_dump($name2) . "<br>";

//INTEGER
echo "INTEGER <br> <br>";
$num = 33;
$num1 = 0b1010;
$num2 = 012;
$num3 = 0xA;
echo $num1,"<br>";

echo gettype($num) . "<br>";
echo var_dump($num) . "<br>";
echo is_int($num) . "<br> <br>";

//float
echo "FLOAT <br> <br>";
$a = 3.5;
$b = 5E2;
$c = 5E-2;
echo is_float($a) . "<br>";
echo "a = $a b = $b c = $c <br>";
echo gettype($b) . "<br>";

////Boolean
echo "BOOLEAN <br> <br>";
$rain = true;
$snow = false;
echo "rain = $rain, snow = $snow <br>";

echo is_bool($rain);
echo gettype($rain), "<br>";
echo var_dump($rain), "<br>";

//ARRAY
echo "ARRAY <br> <br>";
$arr_number = [1,3,54,55];
echo $arr_number ['2'],"<br>";

$arr_user = ['name' => 'William','age' =>33]; //Ассоциативный массив
echo $arr_user ['name'], "<br>";

is_array($arr_user);
echo "<pre>";
print_r($arr_user);
echo "</pre>";

//null
echo "NULL <br> <br>";
$var = null;
echo is_null($var), "<br>";
echo gettype($var), "<br>";
echo var_dump($var), "<br>";
