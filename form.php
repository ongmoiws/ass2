<?php
$conn = new mysqli('localhost', 'root', 'Pr0sTiTute',example) or die("Connect failed: %s\n". $conn -> error);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_POST['id'];
$name = $_POST['name'];
$score = $_POST['score'];
$register_date = $_POST['register_date'];

$query = "INSERT INTO member_list VALUES ('$id','$name','$score', '$register_date')";
mysqli_query($conn,$query);

$query = "SELECT * FROM member_list";
$result = mysqli_query($conn,$query);


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Score</th>
<th>Register Date</th>
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
