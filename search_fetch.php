<?php
$connect = mysqli_connect("localhost", "root", "", "library");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM upload
	WHERE file LIKE '%".$search."%'
	OR writer LIKE '%".$search."%' 
	OR details LIKE '%".$search."%' 
	 

	";
}
else
{
	$query = "
	SELECT * FROM upload ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Code</th>
							<th>Books</th>
							<th>Writer</th>
							<th>details</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["file"].'</td>
				<td>'.$row["writer"].'</td>
				<td>'.$row["details"].'</td>
				<td>'.$row["price"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>