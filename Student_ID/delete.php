<?php
    include "db.php";

    if(isset($_Get['id'])){
        $id= $_Get['id'];

        $sql= "DELETE FROM Students WHERE id=$id";
        
        if($conn->query($sql)=== TRUE){
            echo "Student Successfully Deleted";
        } 
        else {
            echo "Failed Delete Student" . $sql . "<br>" . $conn->error;
    }

    header("Location: index.php");
?>