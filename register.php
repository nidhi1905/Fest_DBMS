<?php
ini_set('error_reporting', 0);
$eid=$_POST['eid'];
$pname=$_POST['pname'];
$sem=$_POST['sem'];
$dpt=$_POST['dpt'];
$usn=$_POST['usn'];

if(isset($pname) && isset($sem) && isset($eid) && isset($dpt) && isset($usn))
{
$sql1 = "insert into particepent values ('".$usn."','".$pname."','".$dpt."','".$sem."')";

$sql2 = "insert into particepates_in values ('".$eid."','".$usn."')";

echo 
$result1 = mysqli_query($conn, $sql1);

$result2 = mysqli_query($conn, $sql2);
if($result1>=1 && $result2>=1)
{
echo "Successfuly Registered";
header('Location: registredTQ.php');
}
else
{
	echo "Incorrect data entered.!!!! \n please enter correct information.";
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
 
<body>  
        

<form method="post">
<br><br><br><h1>Register</h1><br>
   
   NAME:<input type="text" name="pname"><br><br>
   usn:<input type="text" name="usn"><br><br>
   sem:<input type="number" name="sem"><br><br>
   DEPARTMENT:<input type="text" name="dpt"><br><br>
   EVENT ID:<input type="number" name="eid"><br><br>
   
   <input type="submit" name="submit" value="Register">
<br><br>
</body>
</form>
</html>