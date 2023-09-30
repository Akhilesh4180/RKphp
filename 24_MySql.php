<?php
echo "Welcome to the stage where we are ready to get connected to database <br/>";
/*
ways to connect to a MYSQL Database
1.MYSQLi extension
2.PDO - (PHP DATA OBJECTS)
*/


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



?>