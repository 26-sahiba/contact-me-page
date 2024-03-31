<?php
function findPrime($numb){
    if($numb <2){
        return false;
    }
    for($i = 2; $i <= sqrt($numb); $i++){
        if($numb %$i== 0){
            return false;
        }
    } 
    return true;  
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Prime Number</title>
    <style>
        form{
            width: 15%;
            padding: 50px;
            border-radius: 10px;
            background-color:aqua;
            
        }
 
    </style>
</head>
<body>
    <div class="form">
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <h2>Check Prime Number</h2><br>
    <label for="numb">Enter Number:</label><br>
    <input type="number" name="numb" value="<?php echo $numb; ?>" required>
    <br><br>
    
    <button type="submit"><b>Check</b></button>
    </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numb = $_POST['numb'];
        if(findPrime($numb)){
            echo "$numb is a <b>Prime Number<b>";
        }else{
            echo "$numb is <b>Not Prime Number<b>";
        }
    }
    ?>

</body>
</html>