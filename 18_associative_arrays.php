<?php
echo "Welcome to Associative arrays in php <br
>";
// $arr = array('when','where','why');
// echo "<br>";
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];

// Associative Arrays

$favCol = array(
    'akhilesh' => 'green',
    'tahalu'   => 'white',
    'krsna'    => 'orange',
    8       => 'radhekrishn'
);

// echo $favCol['akhilesh'];
// echo "<br>";
// echo $favCol['tahalu'];

foreach ($favCol as $key => $value) {
    echo "<br> Favourite color $key is $value";
    # code...
}
?>