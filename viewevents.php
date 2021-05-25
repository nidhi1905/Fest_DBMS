
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "un";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT e.E_id,e.Ename,e.Time,e.Date,o.Oname,o.Phone FROM event e,organizer o,organizes os where e.E_id=os.E_id and o.O_id=os.O_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><centre>
							  <tr>
								<th>Event ID</th>
								<th>Event Name</th>
								<th>Time</th>
								<th>Date</th>
								<th>Organizer Name</th>
								<th>Organizer Phone Number</th>
							  </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        		<td>" . $row["E_id"]. "</td>
        	  
        	  
        	    <td>" . $row["Ename"]. "</td>
        	  
        	  
        	    <td> " . $row["Time"]. "</td>
        	  
        	  
        	    <td>" . $row["Date"]. "</td>
        	  
        	  
        	    <td>" . $row["Oname"]. "</td>
        	  
        	  
        	  <td>" . $row["Phone"]. "</td>
        	  </tr>";
    }
    echo "</table></centre>";
} else {
    echo "0 results";
}
include 'register.php';
$conn->close();

?>
</body>


</html>