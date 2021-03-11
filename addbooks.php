<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">


body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url(img/login_back.jpg);
 background-size: cover;
 background-attachment: fixed;
 background-position: center;

  
}
.box{
  width: 500px;
  height: 300px;
  padding: 40px;
 background: #050912;
  text-align: center;
  margin-left: 400px;
  margin-top: 15px;
  border-radius: 10%;
  float: left;

}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "file"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "file"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
.dis
{
	float: left;
	font-family: sans-serif;

  


}
.dis p
{
  height: 50px;
  width: 233px;
  margin: 10px;
	background: red;
  padding-left: 10px;
  padding-top: 20px;
  padding-bottom: 10px;
	border: 1px solid black;
	border-radius: 24px;
	
}
.dis p:hover
{
	background: white;
  color: green;
}
.chat
{
  margin: 20px;
  padding: 20px;
float: left;
  height: 300px;
  width: 200px;
  
  padding-bottom: 20px;
}





</style>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
		<body>
			<div class="box">


		
	 <h1>Add New Books </h1>
	<form method="POST" action="upload2.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">


		</form>
	</div><br>

<div class="chat">
      <script id="cid0020000223954761248" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 250px;height: 350px;border-radius: 5%;">{"handle":"ulibrary","arch":"js","styles":{"a":"cc33cc","b":100,"c":"000000","d":"000000","k":"cc33cc","l":"cc33cc","m":"cc33cc","p":"10","q":"cc33cc","r":100,"fwtickm":1}}</script>
</div>








</body>
</html>




		<?php


// This will return all files in that folder
$files = scandir("uploads");

// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)




for ($a = 2; $a < count($files); $a++)
{
    ?>
    <div class="dis">
    <p>
    	<!-- Displaying file name !-->
        <?php echo $files[$a]; ?>
        
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <a href="uploads/<?php echo $files[$a]; ?>" download="   <?php echo $files[$a]; ?>">
            Download
        </a>
    </p>



    </div>
    

    <?php

  }














	


 