<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Me</title>
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            width: 98%;
            height: 120vh;
            overflow: hidden;
            background: linear-gradient(to right, #1deac8 0%, #eb466b 100%);
            font-size: 20px;
        }

        body,
        button,
        input {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }

        .background {
            display: flex;
            min-height: 100vh;
        }

        .container {
            flex: 0 1 700px;
            margin: auto;
            padding: 10px;
        }

        .screen {
            position: relative;
            background: #3e3e3e;
            border-radius: 15px;
        }

        .screen:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            right: 20px;
            bottom: 0;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .screen-header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background: #4d4d4f;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .screen-header-left {
            margin-right: auto;
        }

        .screen-header-button {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 3px;
            border-radius: 8px;
            background: white;
        }

        .screen-header-button.close {
            background: #ed1c6f;
        }

        .screen-header-button.maximize {
            background: #e8e925;
        }

        .screen-header-button.minimize {
            background: #74c54f;
        }

        .screen-header-right {
            display: flex;
        }

        .screen-header-ellipsis {
            width: 3px;
            height: 3px;
            margin-left: 2px;
            border-radius: 8px;
            background: #999;
        }

        .screen-body {
            display: flex;
        }

        .screen-body-item {
            flex: 1;
            padding: 50px;
        }

        .screen-body-item.left {
            display: flex;
            flex-direction: column;
        }

        .app-title {
            display: flex;
            flex-direction: column;
            position: relative;
            color: #ea1d6f;
            font-size: 26px;
        }

        .app-title:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 25px;
            height: 4px;
            background: #ea1d6f;
        }

        .app-contact {
            margin-top: auto;
            font-size: 13px;
            color: #888;
        }

        .app-form-group {
            margin-bottom: 15px;
        }

        .app-form-group.message {
            margin-top: 40px;
        }

        .app-form-group.buttons {
            margin-bottom: 0;
            text-align: right;
        }

        .app-form-control {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #666;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            transition: border-color 0.2s;
        }

        .app-form-control::placeholder {
            color: #666;
        }

        .app-form-control:focus {
            border-bottom-color: #ddd;
        }

        .app-form-button {
            background: none;
            border: none;
            color: #ea1d6f;
            font-size: 14px;
            cursor: pointer;
            outline: none;
        }

        .app-form-button:hover {
            color: #b9134f;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection parameters
        $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
        $username = "root"; // Replace with your MySQL username
        $password = ""; // Replace with your MySQL password
        $dbname = "test"; // Replace with your database name
        $success = "";
        // Connect to the database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Process form submission
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $message = $_POST['message'];

        $stmt = $conn->prepare("INSERT INTO messages (name, email, contact, message, time) VALUES (?, ?, ?, ?, NOW())");

        // Execute query
        $stmt->bind_param("ssss", $name, $email, $contact_no, $message);

        // Execute query
        if ($stmt->execute()) {
            // echo "Data inserted successfully!";
            $success = "Successfull";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

        $conn->close();
    }
    ?>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>ME</span>
                        </div>
                        <br /><br />
                    </div>
                    <div class="screen-body-item">
                        <form method="post" action="">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" name="name" placeholder="NAME">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" name="email" placeholder="EMAIL" required>
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" type="number" name="contact_no"
                                        placeholder="CONTACT NO">
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" name="message" placeholder="MESSAGE">
                                </div>

                                <div class="app-form-group buttons">
                                    <button type="reset" class="app-form-button">CANCEL</button>
                                    <button type="submit" class="app-form-button">SEND</button>

                                </div>
                                <div class="app-form-group buttons">

                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                                        <?php if (isset($success) && $success === "Successfull"): ?>
                                            <div class="app-form-button">Data inserted successfully!</div>
                                        <?php else: ?>
                                            <div class="app-form-button">Error: Data insertion failed!</div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>