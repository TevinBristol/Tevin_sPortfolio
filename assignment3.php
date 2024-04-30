<?php
$servername = "localhost";
$username = "tevinb";
$password = "Tevin1944";
$database = "tevinb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {


// Display Data in a table
echo "<table border= '1'>
<tr>
  <th>ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Pass</th>
</tr>";

//Output data if each row
while($row =$result->fetch_assoc()) {
  echo "<tr>
  <td>".$row["user_id"]."</td>
  <td>".$row["first_name"]."</td>
  <td>".$row["last_name"]."</td>
  <td>".$row["email"]."</td>
  <td>".$row["pass"]."</td>
  </tr>";
}
echo "</table>";
}else{
  echo "0 results";
}

// Close connection
$conn->close();

?>





