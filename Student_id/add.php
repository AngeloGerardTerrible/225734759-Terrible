<?php
    include "db.php";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $num = $_POST['id_no'];

            if(!empty($name) && !empty($num)){
                $sql ="INSERT INTO students (name, id_no) VALUES ('$name', '$num')";

                if ($conn->query($sql) === TRUE){
                    echo "New Student Registered";
                }
                else{
                    echo "Failed to register";
                }
            }
            else{
                echo "Please Fill in all fields";
            }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
</head>
<body>
    <h2>Add new student</h2>
    <form method="post" action="add.php">
        Name: <input type="text" name="name"> <br><br>
        ID number: <input type="text" name="id_no"> <br><br>
        <input type="submit" value="Add Student">

    </form>
    <a href="index.php">Back to Register</a> 
</body>
</html>