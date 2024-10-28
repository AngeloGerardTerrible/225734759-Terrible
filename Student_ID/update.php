<?php
    include "db.php";

    if(isset($_Get['id'])){
        $id= $_Get['id'];

        $sql= "SELECT FROM Students WHERE id=$id";
        $result=$conn->query($sql);

        if($result->num_rows > 0){
            $row =$result->fetch_assoc();
            $name=$row ['name'];
            $idno=$row ['id_no'];
        }
        else{
            echo "No Student Found";
        }
    }

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $name =$_POST['name'];
            $idno=$_POST['id_no'];
            $id=$_POST['id'];

            if (!empty($name)&& !empty($idno)){
                $sql= "UPDATE Students SET name=$name, id_no=$idno WHERE id=$id";
                
                if($conn->query($sql)=== TRUE){
                    echo "Successfuly Updated";
                } 
                else {
                    echo "Failed UPdate Info" . $sql . "<br>" . $conn->error;
                }
            }
            else{
                echo "PLease fill in all fields";
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
<h2>Update Student Info</h2>

<form method = "post" action="update.php">
    <input type="hidden" name="id" values="<?php echo $idno; ?>">
    Name: <input type="text" name="name" values="<?php echo $name; ?>"> <br><br>
    ID Number: <input type="text" name="id_no" values="<?php echo $idno; ?>> <br><br>
    <input type="submit" value= "Update Info">
</form>

<a href="index.php">Back to Student Registration</a>
</body>
</html>
    