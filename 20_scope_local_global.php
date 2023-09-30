<?php
echo "Welcome to scope,local and global varibles in php <br>";

$a = 88;//global varible
$b = 33;

function printValue()
{
    // $a  = 89;//local variable
    global $a , $b; // Give me access to this global varibale
    $a = 100;
    $b = 1000;
    echo "<br>The value of  your varible is  a is $a and b is $b";
}
printValue();
echo "<br>The value of  your varible is  a is $a and b is $b";
echo "<br>";
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
// echo $a;
?>