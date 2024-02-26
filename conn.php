<?php
    error_reporting(0);
    $servername = "localhost";
    $username ="root";
    $password ="";
    $databasename ="login";
    
    $conn = mysqli_connect($servername,$username, $password,$databasename);
    if ($conn){
        // echo "Connection succesfull";
    }
    else{
        echo "Connection fialed";
    }

?>
