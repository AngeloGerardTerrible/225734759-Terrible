<?php
    include "db.php";
    
    $sql = "Select * from students";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registry</title>
</head>
<body>
    <h2>Registry</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id number</th>
            <th>Action</th>
        </tr>
        
        <?php
        if ($result->num_rows >0){
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['id_no'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a></td>";                 
            }
        }
        else{
            echo "<tr><td colspan='3'>No Student</td></tr>";
        }
        ?>
    </table><br>
    <a href="add.php">Add New Student</a> 
</body>
</html>