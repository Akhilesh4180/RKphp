<?php
echo "Welcome to understand the functions in php <br>";
function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value)
    {
        $sum += $value;
    }
    return $sum;
}
function AvgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value)
    {
        $sum += $value;
    }
    return $sum/$i;
}
$akhilesh = [55,33,66,77,88,99];
$sumMarks = processMarks($akhilesh);
$AvergeMarks = AvgMarks($akhilesh);
echo "Total Avgrage Marks scored by akhilesh out of 600 is $AvergeMarks <br>";
echo "Total Marks scored by akhilesh out of 600 is $sumMarks <br>";

$Tahlu = [35,63,46,87,98,99];
$sumMarks = processMarks($Tahlu);
$AvergeMarks = AvgMarks($Tahlu);
echo "Total Avgrage Marks scored by Tahlu out of 600 is $AvergeMarks <br>";
echo "Total Marks scored by Tahlu out of 600 is $sumMarks <br>";

?>