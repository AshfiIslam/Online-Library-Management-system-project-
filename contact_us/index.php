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
    <title>Home</title>
  </head>
  <body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
<!--   <a class="navbar-brand" href="#">
    <img src="https://www.bramento.com/wp-content/uploads/2017/12/k.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Dude 24
  </a> -->
<!--   <div class="dropdown">
  <span class="badge badge-pill badge-danger deletec" id="feednotf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
    <div id="displayfeed"> -->

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
    <h4>Write your Message </h4>
     <div id="resultfeed">
        <!-- All data will display here  -->
        </div>
     <form id="feedbackform" method="post">
  <div class="form-group">
    <label for="name">Enter Your Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="message">Write Something</label>
    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
  </div>
  <button type="button" id="submitFormData" onclick="Feedback();" class="btn btn-primary">Submit</button>

  <p><h2>Our Location</h2></p>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.080601325421!2d90.40624741445572!3d23.744504994919595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88bfd0133c5%3A0xfde0a96bf5fecf99!2z4Ka44KeN4Kaf4Ka-4Kau4Kar4KeL4Kaw4KeN4KahIOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnyDgpqzgpr7gpoLgprLgpr7gpqbgp4fgprY!5e0!3m2!1sbn!2sbd!4v1566684756994!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>

</form>
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
  function Feedback() {
    var name = $("#name").val();
    var message = $("#message").val();
    
    $.post("process.php", { name: name, message: message },
    function(data) {
   $('#resultfeed').html(data);
   $('#feedbackform')[0].reset();
    });
}
</script>
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