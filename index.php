<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Activity 1<br>1.1) ";
    $counter = 1;
    while($counter <= 10){
        echo $counter." ";
        $counter++;
    }
    echo "<br>1.2) ";
    ?>
    
    <?php
    $i = 2;
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
    ?>


</body>
</html>