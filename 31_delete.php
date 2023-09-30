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

$sql = "DELETE FROM `phptrip` WHERE `phptrip`.`dest` =  'Russia' LIMIT 10 ";
// it deletes the multiple records form the table where the dest = UP
// $sql = "DELETE FROM `phptrip` WHERE `phptrip`.`srno` = 2";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result)
{
    echo "deleted successfully";
}
else
{   
    $err = mysqli_error($conn);
    echo " Not deleted successfully due to this error ---> $err";
}
?>