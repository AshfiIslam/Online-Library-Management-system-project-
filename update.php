<?php
include("Connect.php");
error_reporting(0);

$_GET['id'];
$_GET['department'];
$_GET['batch'];
$_GET['email'];
$_GET['username'];
$_GET['password'];
?>

<html>
<head>
	<style>
    
        *{margin: 0; padding: 0;}
        body{background: #ecf1f4; font-family: sans-serif;}
        
        .form-wrap{ width: 520px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; font-family: sans-serif; margin-bottom: 20px;padding-top: 10px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
        sans-serif;
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s; color: red; font-family: sans-serif;font-size: 20px; font-weight: bold;}
        
        ::placeholder{color: #fff;}
        p
        {
        	color:white;
        	padding: 2px 5px;
        	text-align: left;
        	padding-left: 20px;}
        	.update
        	{
        		color: red;
        		background: white;
        		border: 2px solid #3e3d3d;
        		text-align: center;
        		padding: 15px 15px;
        		
        		
        	}
        	.update:hover
        	{
        		background: #a4b15c;
        	}
  
    
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
	<div class="form-wrap">
		<h1>Update students profile </h1>
<form action="" method="GET">
     <p>ID</p>    	 <input type="text" name="id" value="<?php echo $_GET['id']; ?>"/></br></br>
 	 <p>Dept</p>       <input type="text" name="department" value="<?php echo $_GET['department']; ?>"/></br></br>
	 <p>Batch</p>     <input type="text" name="batch" value="<?php echo $_GET['batch']; ?>"/></br></br>
 	 <p>Email</p> 		<input type="text" name="email" value="<?php echo $_GET['email']; ?>"/></br></br>
	 <p>Username</p>    <input type="text" name="username" value="<?php echo $_GET['username']; ?>"/></br></br>
	  <p>password </p>    <input type="text" name="password" value="<?php echo $_GET['password']; ?>"/></br></br>
		<input type="submit" name="submit" value="Update">
</form>
</div>




<?php

if($_GET['submit'])
{
$id	=$_GET['id'];
$department=$_GET['department'];
$batch = $_GET['batch'];
$email = $_GET['email'];
$username = $_GET['username'];
$password = $_GET['password'];
	
	$query = "UPDATE student_info SET department='$department', batch='$batch', email='$email', username='$username',password='$password' WHERE ID='$id' ";
	$data = mysqli_query($conn , $query);
	
	if($data)
	{
		echo  "<font color ='red' class='update'  > Recod Updated : <a href='upd_del.php' class='update' > Click here for updated database</a>";
	}
	else
	{
	echo "<font color='red' class='check' > Recod not updated something went wrong <a href='upd_del.php'>Check the database</a> ";
	}
}
else
{
	echo "Click on update button for changes";
}
?>
</body>
</html>