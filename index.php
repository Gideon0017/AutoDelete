<?php 
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Automatic Delete Product Based On Expiry Date</title>
    <!-- Add a link to your CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Expiro</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="text-center">Automatic Delete Product Based On Expiry Date</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#archieve" data-toggle="tab"><i class="icon-group icon-large"></i>&nbsp;Total Product List</a></li>
                    <li><a href="#add" data-toggle="tab"><i class="icon-user icon-large"></i>&nbsp;Add Product</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <?php include('tab_archieve.php'); ?>
            <?php include('tab_add.php'); ?>
        </div>
    </div>
</body>
</html>

