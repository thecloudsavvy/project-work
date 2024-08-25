<?php
$database_name = 'deft';
$username = 'root';
$password = 'root';
$host = 'localhost';

//connect to the database
$connection = mysqli_connect($host, $username, $password, $database_name) or die("Could not connect to database");