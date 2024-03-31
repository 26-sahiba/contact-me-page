<?php 
extract($_REQUEST);
if(isset($check))
{
if($number%2==0)  
{  
 echo "$number is Even Number";   
}  
else  
{  
 echo "$number is Odd Number";  
}  
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
		<table>
		<tr>
		<td>Enter Your Number</td>
		<td><input type="text" name="number" required/></td>
		</tr>
		<td colspan="2" align="center">
			<input type="submit" value="Even or Odd" name="check"/>
		</tr>
		</form>
	</body>
</html>
</html>