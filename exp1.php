php
Copy code
<!-- index.php -->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Webpage</title>
</head>
<body>
    <header>
        <h1>Welcome to our Simple PHP Webpage!</h1>
    </header>

    <section>
        <?php
            // PHP code to display a dynamic message based on the time of day
            $currentTime = date("H");

            if ($currentTime < 12) {
                echo "<p>Good morning!</p>";
            } elseif ($currentTime < 18) {
                echo "<p>Good afternoon!</p>";
            } else {
                echo "<p>Good evening!</p>";
            }
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Simple PHP Webpage. All rights reserved.</p>
    </footer>
</body>
</html>
