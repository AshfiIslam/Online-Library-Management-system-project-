<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style>
       body
      {
       background-image: url(img/login_back.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
   }
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
   padding-bottom: 5px;
   padding-top: 5px;
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
  	background: #6C5B7B;
  	color: white;
  	text-decoration: none;
  	padding: 1px 3px;
  	border-radius: 10%;
    width: 15px;

  }
  a:hover
  {
    background: #C06C84;
    color: red;
    border: 1px solid black;
  }
  .ins
  {
  	height: 150px;
  	width: 400px;
    float: left; 
  
    padding: 10px;

  }

  .ins a h2
  {
  	color: white;
  	text-align: center;
  	padding: 10px 10px;
  	
  }

  .ins a :hover
  {
  	color: magenta;
     border: 2px solid white;
     background: white;

  }
    .book
  {
  	height: 150px;
  	width: 400px;
    float: left;
    padding: 10px;

  }

  .book a h2
  {
  	margin-top: 15px;
  	color: white;
  	text-align: center;
  	padding: 10px 10px;
  	
  }

  .book a :hover
  {
  	color: magenta;
     border: 2px solid white;
     background: white;
  }
   .demo
  {
    height: 150px;
    width: 400px;
    float: left;
    
    padding: 10px;

  }

  .demo a h2
  {
    margin-top: 15px;
    color: white;
    text-align: center;
    padding: 10px 10px;
    
  }

  .demo a :hover
  {
    color: magenta;
     border: 2px solid white;
     background: white;
  }
 </style>
</head>
<body>
	<div class="ins">

	<a href="insert.php"><h2>Insert New Data</h2></a><br>


	</div>
	<div class="book">
		<a href="upload.php"><h2>Insert New Books</h2></a><br>		
	</div>
  <div class="demo">
    <a href="contact_us/display_notif.php"><h2>Notifications</h2></a>
    
  </div>

</body>
</html>



<?php
include("Connect.php");
error_reporting(0);
$query = "SELECT *FROM student_info";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	<table>
		<tr>
			<th>ID</th>
			<th>Department</th>
			<th>Batch</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th colspan="2">Operation</th>
		</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['department']."</td>
				<td>".$result['batch']."</td>
				<td>".$result['email']."</td>
				<td>".$result['username']."</td>
				<td>".$result['password']."</td>
				<td><a href='update.php?id=$result[id] & department=$result[department] & batch=$result[batch] & email=$result[email] & username=$result[username] & password=$result[password] '>Edit</a></td>
				<td><a href='delete.php?id=$result[id]' onclick='return check()'>Delete</a></td>
			</tr>";
	}
}
else
{
	echo "NO record";
}



?>
</table>
<script>
function check()
{
	return confirm('Do you want to delate it????');
}
</script>