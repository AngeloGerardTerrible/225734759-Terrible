<?php
    $servername = "localhost";
    $username = "root"; // Replace with your database username
    $password = "Ag@2131919"; // Replace with your database password
    $dbname = "Student_ID"; // The database we created earlier

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>