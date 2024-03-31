<html lang="en">
<head>
    
    <title>Account details</title>
    <style>
        
       
        h2 {
            text-align: center;
        }
    </style>

</head>
<body>
    <h2>
    <form method ="POST" action = "">
    
    <?php
        class BankAccount{
            private $balance= "";
            function __construct(){
                $this -> balance = 0.0;
                echo "<br><br>Initial Balance is : ".$this->balance."<br>";
            }
            public function deposit($amount){
                if($amount > 0){
                    $this -> balance += $amount;
                    echo "The deposited Amount is : ".$amount."<br>";
                }
                else{
                    echo "Invalid amount deposit ! <br>";
                }
            }
            
        
            public function withdraw($amount){
                if($amount > 0  && $amount <= $this -> balance){
                    $this -> balance -= $amount;
                    echo "The withdrawl Amount is : ".$amount."<br><br>";
                }
                else{
                    echo "Invalid amount withdrawl ! <br>";
                }
            }

            public function get_balance(){
                echo "<br> Current Balance : " . $this -> balance ."<br>";
            }
        }
        
        
    ?>
        <br>
        Deposit Amount : <input type ="Number" name = "deposit">
        <br><br>
        Withdrawl Amount : <input type ="Number" name = "withdraw">
        <br> <br>
        <input type = "submit" value = "SUBMIT">
        <br>
         <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $d = $_REQUEST['deposit'];
                $w = $_REQUEST['withdraw'];
                $obj = new BankAccount();
                $obj -> deposit($d);
                $obj -> withdraw ($w);
                echo "<br>Now the current balance is : <br>";
                $obj -> get_balance();
            }
         ?>
    </form></h2>
</body>
</html>