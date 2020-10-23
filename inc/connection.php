<?php

$dbServername = "localhost"; // This is local host as we are using Xampp
$dbUsername = "root"; // This is root as we are using Xampp
$dbPassword = ""; // Null is Xampp default.
$dbName = "netmatters_website";

// Attempted use of php inbuilt PDO object
// try {
//     $db = new PDO('sqlite:host=$dbServername;dbname=$dbName', $dbUsername, $dbPassword);
//     // Trying to run database from inside project folder
//     // $db = new PDO("sqlite:".__DIR__."/$dbName.sql");
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//     exit();
//   }

$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
