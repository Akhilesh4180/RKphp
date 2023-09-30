<?php
/*
//Oprators in Php
1.Arithmetic Operator
2.Assingment Operator
3.Comparison Operator
4.Logical Operator
*/

// 1.Arithmetic Operator

$a = 10;
$b = 5;

echo "For a + b , the result is " . ($a + $b) . "<br>";

echo "For a - b , the result is " . ($a - $b) . "<br>";

echo "For a * b , the result is " . ($a * $b) . "<br>";

echo "For a / b , the result is " . ($a / $b) . "<br>";

echo "For a % b , the result is " . ($a % $b) . "<br>";

echo "For a ** b , the result is " . ($a ** $b) ."<br>";


// 2.Assingment Operator
// $x = $a;
// echo "For x  , the Value is " . ($x) . "<br>";

$a += 2;
echo "For a  , the Value is " . ($a) . "<br>";

$a -= 2;
echo "For a  , the Value is " . ($a) . "<br>";

$a *= 2;
echo "For a  , the Value is " . ($a) . "<br>";


$a /= 2;
echo "For a  , the Value is " . ($a) . "<br>";

$a %= 2;
echo "For a  , the Value is " . ($a) . "<br>";

// 3.Comparison Operator

$x = 5;
$y = 5;


echo "For x == y , the result is ";
echo var_dump($x == $y);
echo "<br>";

echo "For x <> y , the result is ";
echo var_dump($x <> $y);
echo "<br>";

echo "For x > y , the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y , the result is ";
echo var_dump($x < $y);
echo "<br>";

echo "For x >= y , the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo "For x <= y , the result is ";
echo var_dump($x <= $y);
echo "<br>";

//4.Logical Operator

$m = false;
$n = true;

echo "For m and n , the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n , the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n , the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n , the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is ";
echo var_dump(!$m);
echo "<br>";



?>