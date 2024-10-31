<?php
    $servername = "localhost";
    $username = "ant4759";
    $password="Ag@2131919";
    $dbname="student_id";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed". $conn->connect_error);
    }
?>