<head>
<body>


    <form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
     NAME:<input type ="text" name="frame">
     <input type='submit'>
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $NAME=$_REQUEST['fname'];
        if(empty($name)){
            echo "name is empty";
     }else  {
        echo $name;
     }

    }
    ?>
</body>
</html>
      