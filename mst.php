
</head>
<body>
    <h2>Sum Calculator</h2>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1"><br><br>
        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2"><br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        if (isset($_POST["num1"]) && isset($_POST["num2"])) {
          
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

          
            if (is_numeric($num1) && is_numeric($num2)) {
              
                $sum = $num1 + $num2;
                echo "<p>The sum of $num1 and $num2 is: $sum</p>";
            } else {
                echo "<p>enter values for numbers.</p>";
            }
        } else {
            echo "<p> provide values for both numbers.</p>";
        }
    }
    ?>
</body>
</html>