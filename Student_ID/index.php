<?php
    include "db.php";

    $sql ="Select * from Students";
    $result= $conn->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student REgistration</title>
</head>
<body>
    <h2>Student Registration</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Student ID</th>
            <th>Action</th>
        </tr>
        <?php
            if ($result->num_rows >0){
                while ($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['name'] . "</td>";
                    echo "<td>".$row['id_no'] . "</td>";
                    echo "<td>Delete</td>";
                }
            }
        ?>
    </table>
</body>
</html>