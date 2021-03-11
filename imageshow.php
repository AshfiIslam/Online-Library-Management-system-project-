<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 150%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Code</th> 
  <th>Name</th> 
  <th>Writer</th> 
  <th>Details</th> 
  <th>Price</th> 
  <th>file</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT code, name, writer, details, price, file FROM books";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["code"]. "</td><td>" . $row["name"] . "</td><td>" . $row["writer"] ."</td><td>" . $row["details"] ."</td><td>" . $row["price"] ."</td><td>". $row["file"]. "</td></tr>"; 
}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>