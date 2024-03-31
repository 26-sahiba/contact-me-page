<head>
<body>


    <form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
     NAME:<input type ="text" name="frame">
     <br>  <br>
     STUDENT ID:<input type ="text" name="frame">
     <br>  <br>
     EMAIL:<input type ="text" name="frame">
     <br>  <br>
     COURSE:<input type ="text" name="frame">
     <br>  <br>
     <input type='submit'>
     <input type='reset'>
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
      