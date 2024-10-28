<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POST['name'];
        $idno=$_POST['id_no'];
    }

    if (!empty($name)&& !empty($idno)){
        $sql= "INSERT INTO Students (name, id_no) Values ('$name','$idno')";
        
        if($conn->query($sql)=== TRUE){
            echo "NEW Student Added";
        } 
        else {
            echo "Failed to add new Student.";
        }
    }
    else{
        echo "PLease fill in all fields";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2>Add New Student</h2>

    <form method = "post" action="add.php">
        Name: <input type="text" name="name"> <br><br>
        ID Number: <input type="text" name="id_no"> <br><br>
        <input type="submit" value= "Add Student">
    </form>

    <a href="index.php">Back to Student Registration</a>
</body>
</html>