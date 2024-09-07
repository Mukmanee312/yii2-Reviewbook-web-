<?php
include 'main-local.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootetrap/css/bootstrap.rtl.min.css" >
</head>
<body>
    <div class="container">
        <div class="row"> 
            <div class="col-sm-6">
<form namae="form1" method="post" action="" enctype="multipart/form-data" >
    <labal>ชื่อสินค้า : > </labal>
    <input type="text" name="pmane" class="form-control" placeholder="ชื่อสินค้า..." required > <br>
    <labal>ชื่อประเภทสินค้า : > </labal>
    <select class="form-select" name="typeID" >
    <?php  
$sql="SELECT * FROM type ORDER BY  type_name"
$hand=mysqli_query($conn,$sql) ;
    while($row=mysql_fetch_array($hand)) {
        ?>
  <option value="1">หนังสือ
    ?>
  </option>
  
</select>
</form>               
            </div>
        </div>
</div>
</body>
</html>