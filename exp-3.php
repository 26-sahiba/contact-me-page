<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculater</title>
    
    <style>
        
        h3 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>

</head>

<body body {background-color: coral;}>
    <h2>Php program to calculate the sum of all the entered numbers.</h2>

    <h3>
        <form method="post" action="">
            <label for="percentage">Enter Range:</label>
            <input type="number" name="num1" id="num1" required>
            <input type="number" name="num2" id="num2" required>
            <button type="submit">Calculate Sum</button>
            <button type="reset">Reset</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sum = 0;
            if ($num1 < $num2) {
                function calculateSum($num1, $num2)
                {
                    $sum = 0;
                    while ($num1 <= $num2) {
                        $sum = $sum + $num1;
                        $num1++;
                    }
                    return $sum;
                }
                $total = calculateSum($num1, $num2);
                echo "First Number is: " . $num1 . ", Second Number is: " . $num2 . "<br>";
                echo "The sum of all the numbers from $num1 to $num2 is: $total";
            } else {
                echo "First Number is: " . $num1 . ", Second Number is: " . $num2 . "<br>";
                echo "Invalid range! The number you entered as lower limit is greater than the upper limit.";
            }
        }
        ?>
    </h3>
</body>

</html>