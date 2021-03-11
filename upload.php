<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>

<style type="text/css">
         body
      {
       background-image: url(img/cover2.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
   }

   .table{
    height: 400px;
    width: 800px;
    margin: 20px auto;
    padding: 40px;
    border: 2px solid white;
    margin-top: 100px;
   }
   .table input
   {
    margin: 20px;

   }
   .table h1
   {
    text-align: center;
    color: white;
   }
   .table input sub
   {
    background: red;
    padding: 10px 10px;
   }
   .table a 
   {
     
    padding: 10px 10px;
    text-decoration: none;
    font-size: 30px;
   

   }
   .table a:hover
   {
   
    border: 2px solid white;;
    color: #131C2D;
    border-radius: 5%;
    padding-right: 40px;
    padding-left: 40px;
   }
   label
   {
    font-size: 20px;
    color: black;
   }
   #up
   {
    border: 1px solid white;
    height: 20px;
    padding: 7px 7px;
    background:white;
    width: 250px;
   }
   #sub
   {
    padding: 7px 7px;
    width: 120px;
    background:#8C0C3C;
    font-size: 18px;
    outline: none;
    margin-left: 100px;

   }
   #sub:hover
   {
    background:#551743;
    border: 1px solid black;
    color: white;
    padding-right: 20px;
    padding-left: 20px;
   }
   .data 
   {
    margin-left: 230px;
    margin-top: 50px;
    border-top: 20px;
   }


</style>


</head>
<body>


  <form enctype="multipart/form-data" method="post">
    <div class="table">
        <h1> Upload Books and Details</h1>
  
          
          <label>File :</label> <input type="file" name="file" id="up">
          <label>Writer:</label><input type="writer" name="writer" id="wt"><br>
          <label>Details:</label> <input type="details" name="details" id="dt"><br>
          <label>Catagory:</label> <input type="types" name="types" id="tp">
          <label>Price:</label> <input type="price" name="price" id="pr"><br>


        <input type="submit" name="submit" value="upload" id="sub"><br>
        <a href="download.php" class="data">click to Show Database</a>

        </form>


</div>
  
</body>
</html>
  
<?php 
$con=mysqli_connect("localhost","root","","library");
//mysql_select_db("library");
if(isset($_REQUEST["submit"]))
{
   $file=$_FILES["file"]["name"];
   ////
    $writer =$_POST['writer'];
    $details = $_POST['details'];
    $types = $_POST['types'];
    $price = $_POST['price'];


  $tmp_name=$_FILES["file"]["tmp_name"];
  $path="upload/".$file;
  $file1=explode(".",$file);
  $text=$file1[1];
  $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
  if(in_array($text,$allowed))
  {
 move_uploaded_file($tmp_name,$path);
 mysqli_query($con,"insert into upload(file,writer,details,types,price)values('$file','$writer','$details','$types','$price')");

 
       echo "File Sucessfully uploaded";
  

  
}
}

?>