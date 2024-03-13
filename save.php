<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con, "aaa");
$numdays=$_POST['numdays'];
$product=$_POST['product'];
$description=$_POST['description'];
$tomorrow = mktime(0,0,0,date("m"),date("d")+$numdays,date("Y"));
$dats=date("Y/m/d", $tomorrow);
mysqli_query($con, "INSERT INTO prod_list(product, description, expiry)VALUES('$product', '$description', '$dats')");
header("location: index.php");
mysqli_close($con);
?> 