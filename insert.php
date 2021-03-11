
<?php

include 'Connect.php';

if(isset($_POST['submit'])){
  $department =$_POST['department'];
  $batch = $_POST['batch'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

 $q = " INSERT INTO `student_info`(`department`,`batch`,`email`,`username`, `password`) 
 VALUES ( '$department','$batch','$email','$username', '$password' )";

  $query = mysqli_query($conn,$q);
  if ($query==1) {

    echo "<script>alert('Login Succesful');</script>";
    header('location:download.php');
    //echo "Data is Inserted";
  }
    else
  {
    echo "<script>alert('Try again ID & Password don't matched');</script>";
    $error = '<label class="text-success">Comment Added</label>';
  }
}
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
     label.error{
            color: red
        }
    </style>
    <!-- //bjcadao -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 

</head>
<body>

  <div class=" col-lg-6 m-auto">
 
 <form method="post" id="signupForm" action="">
 
 
 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  SignUP Free </h1>
 </div>



 
   <label> Department: </label>
 <input type="text" name="department" class="form-control" id="dp" required=""> <br>
   <label> Batch: </label>
 <input type="text" name="batch" class="form-control" id="bc" required=""> <br>
   

   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
  <label> Username: </label>
 <input type="text" name="username" class="form-control " id="un"> <br>

  <label > Password: </label>
 <input type="password" name="password" class="form-control" id="ps"> <br>
   <label> Re-Password: </label>
 <input type="password" name="rps" class="form-control" id="rps"> <br>

  <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 
  </div>
 </form>
 


 <!-- validation -->
 








 </div>

 <script>
   
  $("#signupForm").validate({
  rules: {
    email: {
      required: true
      
    },
    ps: {
         required: true,
          minlength: 4
          },
    rps: {
           required: true,
             minlength: 4,
            equalTo: "#ps"
         }




  },
  messages: {
    email: {
      required: "We need your email address to contact you",
      
    },
   ps: {
      required: "Please provide a password",
      minlength: "Your password must be at least 4 characters long"
                },
  rps: {
      required: "Please provide a password",
      equalTo: "Please enter the same password as above"
                }
  }
});
      
</script> 



<!-- <script type="text/javascript">
  $(document).ready(function () {

$('#signupForm').validate({
    rules: {
        
        email: {
            required: true,
            email: true
        },
       
    },
    highlight: function (element) {
        $(element).closest('.nw').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('OK!').addClass('valid')
            .closest('.nw').removeClass('error').addClass('success');
    }
});
});


</script> -->
 <script>
          function myFunction() {

            alert("SignUP Succesful ..!! ");}
        </script> 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

