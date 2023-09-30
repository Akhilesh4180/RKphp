<?php
echo "Welcome to foreach loop in php <br>";
$arr = array("banana","bread","apple","chiku","butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
//     # code...
// }
 
//  better way to do thin  by using the foreach loop
foreach ($arr as  $value) {
    echo "$value <br>";
    # code...
}
?>