<?php
echo "Welcome to the world of dates <br>";
$d = date("dS F Y G:i:s:v a ");
echo "Today date is $d <br>";


$date = new DateTimeImmutable('2000-01-01');
echo $date->format('Y-m-d H:i:s');


$year = date("Y");
echo "<br>";
echo "Copyright $year All rights are reserved";
?>