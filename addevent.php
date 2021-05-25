<?php
ini_set('error_reporting', 0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "un";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$eid=$_GET['eid'];
$ename=$_GET['ename'];
$time=$_GET['time'];
$date=$_GET['date'];
$oid=$_GET['oid'];
$oname=$_GET['oname'];
$ophone=$_GET['ophone'];


if(isset($ename) && isset($time) && isset($eid) && isset($date) && isset($oid) && isset($oname) && isset($ophone))
{
$sql1 = "insert into event values ('".$eid."','".$ename."','".$time."','".$date."')";
$sql2 = "insert into organizer values ('".$oid."','".$oname."','".$ophone."')";
$sql3 = "insert into organizes values ('".$eid."','".$oid."')";

echo  
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
if($result1>=1 && $result2>=1 && $result3>=1){
echo "Event added successfully";
header('Location: addsuccessful.php');
}else {
	echo "Incorrect data entered.!!!! \n please enter correct information.";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Event</title>
</head>
 
<body>  

<form method="get">
<h1>Add Events</h1><br>
   Event ID:<input type="number" name="eid"><br><br>
   Name:<input type="text" name="ename"><br><br>
   Time:<input type="text" name="time"><br><br>
   Date:<input type="text" name="date"><br><br>
   Organizer ID:<input type="number" name="oid"><br><br>
   Organizer name:<input type="text" name="oname"><br><br>
   Organizer Phone:<input type="number" name="ophone"><br><br>
   <input type="submit" name="Submit">
<br><br>
</center>
</form>
</body>
</html>