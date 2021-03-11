<?php
include("Connect.php");
$rollno = $_GET['id'];
$query = "DELETE FROM student_info WHERE id='$rollno'";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/lib/Bootstarp/upd_del.php">
	<?php
}
else 
{
	echo "Wrong";
}
?>