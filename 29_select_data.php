<?php

//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbakhilesh";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if Connection was not successful
if(!$conn)
{
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else
{
    echo "Connection was Sucessful<br>";
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

//Find the no of records returned
$num =  mysqli_num_rows($result);
echo  $num;
echo " records found in the Database <br>";

//Display the rows returned by the sql query
if($num>0)
{
    // $row = mysqli_fetch_assoc($result);  // asooc --> associative array
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // the mysqli_fetch_assoc()----> it returns the next row.
    // we can fetch in a better way using the while loop.
    while($row = mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $row['srno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";   
    }


}

?>