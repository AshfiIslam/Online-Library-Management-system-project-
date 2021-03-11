  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      .editnav  {
        background-color: #d0d4db;
        padding: 2px;
      }
      .notfis1{
        background-color: #c4c9d1; 
        cursor: pointer;
      }
      .notfis1:hover{
        background-color: #dfcee0; 
      }
       .notfis2{
        background-color: #edeff2; 
        cursor: pointer;
      }
      .notfis2:hover{
        background-color: #dfcee0; 
      }
    </style>
    <title>View Msz</title>
  </head>
  <body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="https://www.bramento.com/wp-content/uploads/2017/12/k.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Notifications
  </a>
  <div class="dropdown">
  <span class="badge badge-pill badge-danger deletec" id="feednotf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
    <div id="displayfeed">

    </div>
  </span>

  <div class="dropdown-menu editnav" aria-labelledby="feednotf" style="margin-left: -230px; width: 250px">
      <div id="displayfeed1">
    </div>
  </div>
</div>
</nav>
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm">
    <?php
        include'db.php';
        $id = $_GET['view_id'];
        $result = $dbcon->prepare("SELECT * FROM feedback WHERE id= :id");
         $result->bindParam(':id', $id);
         $result->execute();
        
        $row=$result->fetch(PDO::FETCH_ASSOC);
            extract($row);
            
           ?> 
         <h4 style="color: blue"><?php echo $name; ?></h4>
          <p><?php echo $message; ?></p>
        </a>
   <?php
          $idr = $_GET['view_id'];
  $stmt=$dbcon->prepare("UPDATE `feedback` SET `mszr` = '' WHERE `feedback`.`id` = $idr");
  $stmt->execute();
  ?>
</div>
    <div class="col-sm">

    </div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript">
 function loadData() {
$(document).ready(function() {
    $("#displayfeed").load("cnotf.php");  //using load() functions here 
    
});
 };
  loadData();
setInterval(loadData, (2 * 1000));
</script>
<script type="text/javascript">
 function loadrData() {
$(document).ready(function() {
    $("#displayfeed1").load("display.php");  //using load() functions here 
    
});
 };
  loadrData();
setInterval(loadrData, (2 * 1000));
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $(".deletec").click(function(){
    $.ajax({
    type: "GET",
    url: "delete.php"
});
  });
});
</script>
  </body>
</html>
   

