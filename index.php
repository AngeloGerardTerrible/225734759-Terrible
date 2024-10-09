<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>LOOPS</h1>
    <?php
    echo "Activity 1: Number Counter<br>1.1) ";
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

    <?php
    echo "<br><br>Activity 3: Multiplication Table<br>";
    $multiplier = 7;
    for ($i = 1; $i <= 10; $i++) {
    $result = $multiplier * $i;
    echo "$multiplier x $i = $result<br>";
    }
    ?>

    <?php
    echo "<br><br>Activity 4: Loop Control with break and continue<br>";
    for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 8) {
        echo "$i<br>";
        break;
    }
    echo $i." ";
    }
    ?>
</body>
</html>