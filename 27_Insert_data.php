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

// Variables to be inserted into the table
$name = "krsna";
$destination = "Russia";

// sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn,$sql);

// Add a new trip to the trip to  Triptable the database.
if($result)
{
    echo "The record has been inserted  successfully!<br> ";
}
else
{
    echo "The record was not inserted successfully because of this error-->" . mysqli_error($conn);
}

?>