<?php
$name =  "Akhilesh is a unique boy";
echo $name;
$name1 = "Radhe Krishn";
echo $name1;
echo "<br>";

echo"The length of the " . " My String is ". strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"a");
echo "<br>";
echo str_replace("Akhilesh","Tahalu",$name);
echo "<br>";
echo str_repeat($name1,10);
echo "<br>";
echo "<pre>";
echo rtrim("         This is a briliant boy         ");
echo "<br>";
echo ltrim("        This is a briliant boy         ");
echo "</pre>";
?>