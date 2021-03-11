<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
        <title>Search Box</title>
        <link rel="stylesheet" href="css/search-box.css">

    <style type="text/css">
        *{
    margin: 0;
    padding: 0;
}
.table-box
{
    margin: 50px auto;
    height: 400px;
   width: 800px;
}

.table-box tr{
    display: table;
    width: 80%;
    margin: 10px auto;
    font-family: sans-serif;
    background: transparent;
    padding: 12px 0;
    color: #555;
    font-size: 13px;
    box-shadow: 0 1px 4px 0px rgba(0,0,50,0.3);
}
.table-box th{
    background: #7e7;
    box-shadow: none;
    color: #fff;
    font-weight: 600;
    padding: 8px 5px;
}
.table-box th,td{
    border-right: none;
    color: black;
}
.table-box td{
    display: table-cell;
    width: 20%;
    text-align: center;
    padding: 4px 0;
    border-right: 1px solid #d6d4d4;
    vertical-align: middle;
    color: black;
}

a{
    text-decoration: none;
    color: #555;
}

@media only screen and (max-width: 600px) {
  .table-row {
    font-size: 11px;
  }
}





    </style>

</head>
<body>

<div class="search-box-wrapper">
 
<form method="post">
<label>Search</label>
<input type="text" name="search" placeholder="Search..." class="search-box-input">
<input type="submit" name="submit" class="search-box-button" >
</form>

</div>
 
</body>
</html>
 
<?php
 
$con = new PDO("mysql:host=localhost;dbname=library",'root','');
 
if (isset($_POST["submit"])) {
   
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `books` WHERE name = '$str'");

 
    $sth->setFetchMode(PDO:: FETCH_OBJ);

    $sth -> execute();

 
    if($row = $sth->fetch())
    {
        ?>

        
        <table class="table-box">

            <tr>

                <th>Code</th>
                <th>Name</th>
                <th>Writter</th>
                 <th>Details</th>
                 <th>Price</th>
                 <th>Book</th>
                 <th>Action</th>
            </tr>
            <tr><td><?php echo $row->code; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->writer; ?></td>
            <td><?php echo $row->details; ?></td>
            <td><?php echo $row->price; ?></td>
            <td><?php echo $row->file; ?></td>
            <td class=""> <a href="download.php?code=<?php echo $row['code']?>"></a>Download</td>
        </tr>
            
            
            
 
        </table>

<?php 
    }
         
         
        else{
            echo "Name Does not exist";
        }

    }
 
 


 
?>