<?php
//This section declares variables that store the server name, username, password, and database name. 
//These values are used to establish a connection to the MySQL database.
    $servername = "localhost"; 
    $username = "phpmyadmin"; 
    $password = "root2023";   
    $database = "member_ship";
//This line establishes a connection to the MySQL database using the mysqli_connect() function. 
//It takes the servername, username, password, and database name as parameters 
    $conn = mysqli_connect($servername, 
    $username, $password, $database);
//Returns a connection object ($conn) if the connection is successful.
//This code block checks if the connection to the database was successful. 
//If the connection is successful, it prints "Success" to the output. 
//If the connection fails, it calls the mysqli_connect_error() function to retrieve the specific error 
//message and passes it to the die() function, 
//which terminates the script and displays the error message.
    if($conn) {
        echo "Success"; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
?>