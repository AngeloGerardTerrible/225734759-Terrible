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

    <p><br>Activity2: Password Validator</p>
    <?php
    $accessGranted = false;
    do {
        if (isset($_POST['submit'])) {
            $input = trim($_POST['password']);

            if ($input != "password123") {
                echo "Incorrect password. ";
                unset($_POST['submit']);
            } else {
                $accessGranted = true;
            }
        }
    ?>
    <form action="" method="post">
        <label for="password">Please enter the password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    } while (!$accessGranted && isset($_POST['submit']));

    if ($accessGranted) {
        echo "Access Granted.";
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
    echo "<br>Activity 4: Loop Control with break and continue<br>";
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

    <?php
    echo "<br>Activity 5: Sum of Numbers<br>";
    $sum = 0;
    $i = 1;
    while ($i <= 100) {
    $sum += $i;
    $i++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum";
    ?>

    <?php
    echo "<br><br>Activity 6: Array Iteration with foreachs<br>";
    $favoriteMovies = array(
        "1. Silence of the Lamb",
        "2. Lethal weapon",
        "3. Avengers: End Game",
        "4. Ace Ventura",
        "5. The Gods must be crazy"
    );

    foreach ($favoriteMovies as $movie) {
        echo $movie."<br>";
    }
    ?>

    <?php
    echo "<br>Activity 7: Key-Value Pairs with foreach<br>";
    $studentInfo = array(
        "Name" => "Angelo",
        "Age" => 28,
        "Grade" => 90,
        "City" => "Baguio"
    );

    foreach ($studentInfo as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>

    <p>Activity 8: Factorial Calculator</p>
    <?php
    function calculateFactorial($num) {
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    $num = 5; // example input
    $factorial = calculateFactorial($num);
    echo "Factorial of $num is: $factorial\n";
    ?>

    <p>Activity 9: FizzBuzz Challenge</p>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo "$i\n";
        }
    }
    ?>

    <p>Activity 10: Prime Number Checker</p>
    <?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (isset($_POST['submit'])) {
        $num = (int) $_POST['number'];
        if (isPrime($num)) {
            echo "$num is a prime number.\n";
        } else {
            echo "$num is not a prime number.\n";
        }
    }
    ?>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Check if prime</button>
    </form>

</body>
</html>