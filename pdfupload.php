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
   .sub
   {
    padding: 7px 7px;
    width: 120px;
    background:#8C0C3C;
    font-size: 18px;
    outline: none;

   }
   .sub:hover
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
    <div class="table">
        <h1> Upload Books and Details</h1>
  
<form method="post" enctype="multipart/form-data">
        <label>Code </label>
    <input type="text" name="cd">
         <label>Name</label>
    <input type="text" name="title"><br>
        <label>Writer</label>
    <input type="text" name="wt">
        <label> Details</label>
    <input type="text" name="dt"><br>
         <label>Price</label>
    <input type="text" name="pr"><br>

        <label>File Upload</label>
     <input type="File" name="file" id="up">

    <input type="submit" class="sub" name="submit" ><br>

   <a href="imageshow.php" class="data">click to Show Database</a>
   

  
  
</form>


</div>
  
</body>
</html>
  
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "library";  #database name
  
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
  
if (isset($_POST["submit"]))
 {

        $cd = $_POST["cd"];

     #retrieve file title
        $title = $_POST["title"];
        $wt = $_POST["wt"];
        $dt = $_POST["dt"];
        $pr = $_POST["pr"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
  
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  
    #sql query to insert into database
    $sql = "INSERT into books(code,name,writer,details,price,file) VALUES('$cd','$title','$wt','$dt','$pr','$pname')";
  
    if(mysqli_query($conn,$sql)){
  
    echo "File Sucessfully uploaded";
    
    
    }
    else{
        echo "Error";
    }


}
  
  
?>