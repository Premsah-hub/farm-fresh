<?php

include 'db.php';

$sql = "SELECT * FROM farmers";
$result = $conn->query($sql);

echo "<h1>Registered Farmers</h1>";

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>";

while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();

?>