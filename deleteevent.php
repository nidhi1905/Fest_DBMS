<?php
ini_set('error_reporting', 0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "un";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
include 'seeevents.php';

$id=$_GET['eid'];


if(isset($id))
{
$sql = "DELETE FROM event WHERE E_id = '$id'";
echo  //$sql;
$result = mysqli_query($conn, $sql);

if($result=1){

header('Location: deletesuccess.php');
echo "Data deleted successfully";
}else {
	echo "Incorrect data entered.! Please Enter valid event name ";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Event</title>
</head>
 
<body>  
       
<form method="get"><center>
<h1>Delete Event</h1><br>
<h3>Enter the event ID</h3><br>
   Name:<input type="number" name="eid"><br><br>
    
   <input type="submit" name="Submit">
<br><br>
</center>
</form>
 
</body>
</html>