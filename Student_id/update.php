<?php
    include "db.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql= "SELECT * from students WHERE id=$id";
        if($result->num_rows > 0){
            $rows = $result->fetch_assoc();
            $name = $row['name'];
            $num = $row['id_no'];
        }
        else{
            echo "No Student Found";
        }

    }
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $num = $_POST['id_no'];
        $id = $_POST['id'];
            if(!empty($name) && !empty($num)){
                $sql ="Update students set name='$name', id_no='$num' Where id=$id";

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
    <title>Update</title>
</head>
<body>
    <h2>Edit Info</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name"> <br><br>
        ID number: <input type="text" name="id_no"> <br><br>
        <input type="submit" value="update info">

    </form>
    <a href="index.php">Back to Register</a> 
</body>
</html>
