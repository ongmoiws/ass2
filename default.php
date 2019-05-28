<?php
$conn = new mysqli('localhost', 'root', 'pass',example) or die("Connect failed: %s\n". $conn -> error);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$query = "SELECT DISTINCT * FROM member_list WHERE name LIKE '%J%'";
$result = mysqli_query($conn,$query);


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Score</th>
<th>Register date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['register_date'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
