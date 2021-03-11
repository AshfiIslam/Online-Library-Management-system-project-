<?php
include'db.php';
date_default_timezone_set("Asia/Kathmandu");
$name= $_POST['name'];
$message= $_POST['message'];
$notr= '1';
$mszr= '2';
$sentdate= date("Y-m-d h:i:sa");

try{
			
			$stmt = $dbcon->prepare("INSERT INTO feedback(name,message,notr,mszr,sentdate) VALUES(:name, :message, :notr, :mszr, :sentdate)");

			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":message", $message);
			$stmt->bindParam(":notr", $notr);
			$stmt->bindParam(":mszr", $mszr);
			$stmt->bindParam(":sentdate", $sentdate);
			if($name=="")	{
		echo "<div class='alert alert-danger'>provide your rname !</div>";	
         }
		else if($message=="")	{
		echo "<div class='alert alert-danger'>provide message !</div>";
		 }
          else if(strlen($name) < 4){
		echo "<div class='alert alert-danger'>Name must be atleast 4 characters</div>";	
	     }
	      else if(strlen($name) > 25){
		echo "<div class='alert alert-danger'>Name must be less than 25 characters</div>";	
	     }
	      else if(strlen($message) < 4){
		echo "<div class='alert alert-danger'>Name must be atleast 4 characters</div>";	
	     }
	      else if(strlen($message) > 255){
		echo "<div class='alert alert-danger'>Message must be less than 255 characters</div>";	
	     }
	     else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        echo "<div class='alert alert-danger'>Only letters and white space allowed</div>";	
         }
	      else if (!preg_match("/^[a-zA-Z ]*$/",$message)) {
        echo "<div class='alert alert-danger'>Only letters and white space allowed</div>";	
         }
			else {

			$stmt->execute();
			
				echo '<div class="alert alert-success">Thanks!<br>
				</div>';
			}
			}
		 catch(PDOException $e){
			echo $e->getMessage();
	}

?>