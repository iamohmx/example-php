<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "coffeeshopdb";
    $conn = new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die("Cannot connect database!");
    }




?>