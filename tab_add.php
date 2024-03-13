<!DOCTYPE html>
<html>
<head>
	<title>Automatic Delete Product Based On Expiry Date</title>
</head>
<style>
.containers{
	margin-right:345px;
	margin-left:320px;
	height: 30vh;

}
form{
	display: flex;
    flex-direction: column;
    gap: 5px;
}
</style>
<body>
<div class="tab-pane fade"id="add">
	<div class="containers">
	<p class="style={ align-items: center;}" style="color:#000">Fill Up All The Details Below!</p>
		<form class="form-horizontal" method="POST" action="save.php">
			<div class="form-group">
				<label class="control-label col-sm-2" for="product">Product:</label>
				<div class="span4">
					<input type="text" name="product" class="form-control" id="product" placeholder="Product" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="description">Description:</label>
				<div class="span4">
					<input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="numdays">Number of Days:</label>
				<div class="span4">
					<input type="text" name="numdays" class="form-control" id="numdays" placeholder="Number of Days" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>