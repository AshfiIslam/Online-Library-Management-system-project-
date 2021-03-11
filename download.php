<!DOCTYPE html>
<html>
<head>
	<title>file download</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

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
   margin: 10px 10px;
     } 
  th {
   background-color: #474747;
   color: white;
   padding-bottom: 7px;
   padding-top: 7px;
   border-bottom: 5px solid #000000;
   padding-left: 5px;

    }
    td
    {
    padding-bottom: 5px;
    padding-top: 5px;
    padding-left: 7px;




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
$con=mysqli_connect("localhost","root","", "library");
//mysql_select_db("library");
$query=mysqli_query($con,"select * from upload");
$rowcount=mysqli_num_rows($query);

?>
<h1>Welcome to your Dream</h1>
			<div class="form-group">
				<div class="input-group">
					
					<input type="text" name="search_text" id="search_text" placeholder=" You can Search Books through code number" class="form-control" />
					<span class="input-group-addon" ><a href="search.php">Search</a></span><br>


				</div>
			</div>
    <!--   //catagory of books -->

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Catagorys of books
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#" >Edutative</a></li>
    <li><a href="horror_type_download.php">Horror</a></li>
    <li><a href="#">Science fiction</a></li>
    <li><a href="#">Thriller</a></li>
    <li><a href="romantic_type_download.php">Romantic</a></li>
    <li><a href="button_download.php">Poetry</a></li>

  </ul>
</div><br>

<!-- select query code -->








<!-- <p>Search <input type="search" name="search"> 
<input type="submit" name="submit"></p> -->
<table border="1">
<tr>
	<th>Code</th>
	<th>Books</th>
	<th>Writer</th>
	<th>Details</th>
  <th>Types</th>
	<th>Price</th>

</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query);

?>
<tr>
<td><?php echo $row["id"] ?></td>
<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>
<td><?php echo $row["writer"] ?></td>
<td><?php echo $row["details"] ?></td>
<td><?php echo $row["types"] ?></td>
<td><?php echo $row["price"] ?></td>
</tr>


<?php	
}


?>
</table>



