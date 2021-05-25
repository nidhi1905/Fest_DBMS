
<?php
//ini_set('error_reporting', 0);
//require('database_class/config.inc.php');
//$db->connect();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "un";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}



//echo $adminusername;
if(isset($_POST['name']))
{
$uname=$_POST['name'];
$upassword=$_POST['password'];
$sql = "SELECT * from admin where  name='".$uname."'and password='".$upassword."'";//and  = $ddlMedicineList
//echo $sql;
$result = mysqli_query($conn,$sql);

if((mysqli_num_rows($result)==1)){
	echo "You have successfully logged in";
	header('Location: adminoperation.php');


}
else {
	echo "UserName and Password is incorrect";
	}
}	
?>
<html>
<head>
<title>Admin Login</title></head>
<body><center>
<body>
<form method="post" action="">
<h1>Admin Login</h1><br>
   UserName:<input type="text" name="name"/><br><br>
   Password:<input type="password" name="password"/><br><br>
   <input type="submit" name="submit" value="LOGIN"/>
<br><br>
</center>
</form>

</body>
</html>

