<?php
$name = "Akhilesh";
$income = 200;
/* php data types
1.String
2.Integer
3.Float
4.Boolean
5.Array
6.Object
7.NULL
 */

 //String - Sequence of Characters
 $name = "Akhilesh";
 $friend = 'Krishn';
 echo "$name ka friend is $friend";
 echo "<br>";

 // Integer - Non decimal numbers.
 $income = 333;
 echo $income;
 echo "<br>";
 $depts =  -655;
 echo $depts;
 echo "<br>";
 
 // Float - Decimal point  numbers.
 $income = 33.3;
 echo $income;
 echo "<br>";
 $depts =  -65.5;
 echo $depts;
 echo "<br>";
 
 //Boolean - Can be either true or false 
 $x = true;
 $is_apple = false;
 echo var_dump($x);
 echo "<br>";
 echo var_dump($is_apple);
 echo "<br>";

// Object - Instances of Classes
// Employee is a class --> akhilesh can be a  object

//Array - Used to store multiple values of the same datatype in the single varible.
echo "<br>";
$friends  = array("gopal","Kishori","krishn","radha","kanahaa");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";
//echo $friends[5];  will throw an error as the size of the array is 5 only.


// NULL
$name = null;
echo var_dump($name);

?>