<?php

$servername = "localhost";
$username ="Tafreed";
$dbname = "confusion";
$password = "your-db-password";

try{
    $conn = new mysqli($servername,$username,$password,$dbname);
}
catch(Exception $e){
    //Only for Testing Purposes
    echo "An Exception Occured Here: ". $e->getMessage();
    //Actual on deployment print the error message in a log file with timestamp when the exception occured
    echo "System Busy Try Again Later";   
}
catch(Error $e){
     //Only for Testing Purposes
     echo "An Exception Occured Here: ". $e->getMessage();
     //Actual on deployment print the error message in a log file with timestamp when the exception occured
     echo "System Busy Try Again Later"; 
}

?>