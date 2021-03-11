<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  table {
   border-collapse: collapse;
   width: 100%;
   color: white;
   background: #581845;
   font-family: monospace;
   font-size: 25px;
   border: 1px solid white;
   text-align: left;
   
     } 
  th {
   background-color: #474747;
   color: white;
   padding-bottom: 7px;
   padding-top: 7px;
   border-bottom: 5px solid #000000;
   t
    }
    td
    {
    padding-bottom: 5px;
    padding-top: 5px;




    }

  tr:nth-child(even) {background-color: #900C3F
  }

  a{
    background: white;
    color: red;
    text-decoration: none;
    padding: 1px 3px;
    border-radius: 10%;
    width: 15px;

  }
  h1
  {
    color: #645394;
    text-align: center;


  }


  </style>
</head>
<body>

</body>
</html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM upload where types='horror'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Code</th>";
                echo "<th>Books</th>";
                echo "<th> Writer</th>";
                echo "<th>Details</th>";
                echo "<th>Price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['file'] . "</td>";
                echo "<td>" . $row['writer'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>