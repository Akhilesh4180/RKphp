<?php

//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

//Die if Connection was not successful
if(!$conn)
{
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else
{
    echo "Connection was Sucessful";
}
//Create a db
$sql = "CREATE DATABASE dbAkhilesh4";
$result = mysqli_query($conn,$sql);

// Check for the database creation success
if($result)
{
    echo "The db was created successfully <br> ";
}
else
{
    echo "The db was not created successfully because of this error-->" . mysqli_error($conn);
}

?>