<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <h2>Grade Calculator</h2>

    <form method="post" action="">
        <label for="percentage">Enter Percentage:</label>
        <input type="text" name="percentage" id="percentage" required>
        <button type="submit">Calculate Grade</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form submission
        $percentage =($_POST["percentage"]);
        //=== (comparing the functions)
        // Calculate grade using the provided grading system
        function calculateGrade($percentage) {
            if ($percentage >= 90) {
                return 'A';
            } elseif ($percentage >= 80) {
                return 'B';
            } elseif ($percentage >= 70) {
                return 'C';
            } elseif ($percentage >= 60) {
                return 'D';
            } else {
                return 'F';
            }
        }

        $grade = calculateGrade($percentage);
        // function call 

        // Display the result 
        echo "<p>Percentage: $percentage%, Grade: $grade</p>";
       // echo "hello";
    }
    ?>
    </div>
</body>
</html>