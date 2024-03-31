<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        input[type="number"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            animation: buttonHover 0.3s ease;
        }

        @keyframes buttonHover {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .balance {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Bank Account Details</h2>
        <form method="POST" action="">
            <label for="deposit">Deposit Amount:</label>
            <input type="number" id="deposit" name="deposit">
            <input type="submit" name="deposit_submit" value="DEPOSIT">

            <br>

            <label for="withdraw">Withdrawal Amount:</label>
            <input type="number" id="withdraw" name="withdraw">
            <input type="submit" name="withdraw_submit" value="WITHDRAW">

            <br>

            <input type="submit" name="check_balance" value="CHECK BALANCE">

            <br>

            <?php

            session_start();

            class BankAccount
            {
                public function deposit($amount)
                {
                    if ($amount > 0) {
                        $_SESSION['balance'] += $amount;
                        echo "<div class='balance'>The deposited amount is: " . $amount . ".<br> Your current balance is: " . $_SESSION['balance'] . "</div>";
                    } else {
                        echo "<div class='balance'>Invalid amount deposit!</div>";
                    }
                }

                public function withdraw($amount)
                {
                    if ($amount > 0 && $amount <= $_SESSION['balance']) {
                        $_SESSION['balance'] -= $amount;
                        echo "<div class='balance'>The withdrawal amount is: " . $amount . ".<br> Your current balance is: " . $_SESSION['balance'] . "</div>";
                    } else {
                        echo "<div class='balance'>Invalid amount withdrawal or insufficient funds!</div>";
                    }
                }
            }

            if (!isset($_SESSION['balance'])) {
                $_SESSION['balance'] = 0.0;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $obj = new BankAccount();
                if (isset($_POST['deposit_submit'])) {
                    $d = $_POST['deposit'];
                    $obj->deposit($d);
                }
                if (isset($_POST['withdraw_submit'])) {
                    $w = $_POST['withdraw'];
                    $obj->withdraw($w);
                }
                if (isset($_POST['check_balance'])) {
                    echo "<div class='balance'>Your current balance is: " . $_SESSION['balance'] . "</div>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>