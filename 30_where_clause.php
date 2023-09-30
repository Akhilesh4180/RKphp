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

$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'UP'";
$result = mysqli_query($conn,$sql);

//Usgae of WHERE clause to fetch data form the database
$num =  mysqli_num_rows($result);
echo  $num . " records found in the Database <br>";
$no = 1;
if($num>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";   
        $no = $no + 1;
    }
}

// //Usgae of WHERE clause to update data form the database


$sql = "UPDATE `phptrip` SET `name` = 'kishori' WHERE `dest` = 'UP'";
$result = mysqli_query($conn,$sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result)
{
    echo "we updated the record successully"; 
}
else
{
    echo "we could not updated the record successully"; 
}

?>