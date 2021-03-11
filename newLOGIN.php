

<?php
include("Connect.php");
$error = '';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			background-image: url(img/login_back.jpg);
			background-size: cover;
			 background-attachment: fixed;
 			background-position: center;

		}
		<script src="sweetalert2.min.js"></script>
		<link rel="stylesheet" href="sweetalert2.min.css">

	</style>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	  <script src="demo_script_src.js">
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->


</head>
<body>

	<div class="box">

		<h1>Log in</h1>
	<form action="" method="POST" id="signupForm">

<input type="text" name="name" value="" id="nm" placeholder="CSE --- -- ---" required="" / >
<input type="password" name="pass" value="" id="ps" placeholder="pass" required="" / >
<input type="submit" name="submit" value="Log In">

</form>




</div>
<script type="text/javascript">

</script>




</body>
</html>



<?php


if (isset($_POST['submit']))
	{
	$userr = $_POST['name'];
	$pwdd = $_POST['pass'];
	$query = "SELECT * FROM admin WHERE id='$userr' && pass ='$pwdd'";
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		
		 $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: upd_del.php");
		 
		 // echo "<script>alert('Login Succesful');</script>";
			// header('location:upd_del.php');
	}
		else
	{	
		

		 echo "<script>alert('Try again ID & Password don't matched');</script>";
		
		$error = '<label class="text-success">Comment Added</label>';
	}

}

 if(isset($_POST['submit']))
{
	$user = $_POST['name'];
	$pwd = $_POST['pass'];
	$query = "SELECT * FROM student_info WHERE username='$user' && password ='$pwd'";
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		echo "<script>alert('Login Succesful');</script>";
		header('location:download.php');
	}
	else
	{	
		echo "<script>alert('Try again ID & Password don't matched');</script>";
		$error = '<label class="text-success">Comment Added</label>';

	}
}








?>