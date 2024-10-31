<?php
    include "db.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql= "DELETE from students WHERE id=$id";

            if ($conn->query($sql) === TRUE){
                echo "Student Removed";
            }
            else{
                echo "Failed to remover" . $sql . "<br>" . $conn->error;
            }

    }
    header("Location: index.php");
?>