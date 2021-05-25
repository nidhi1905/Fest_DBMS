
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

$sql = "SELECT p.*,e.Ename FROM particepent p, particepates_in ps,event e where p.usn=ps.usn and ps.E_id=e.E_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table><br><br><br><br><br><br>
                              <tr>
                                <th>USN</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Sem</th>
                                <th>Event</th>
                                
                              </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["usn"]. "</td>
              
              
                <td>" . $row["Pname"]. "</td>
              
              
                <td> " . $row["Department"]. "</td>
              
              
                <td>" . $row["sem"]. "</td>
              
              
                <td>" . $row["Ename"]. "</td>
              
              
              </tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}
 
$conn->close();

?>
</body>


</html>