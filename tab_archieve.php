<!DOCTYPE html>
<html>
<head>
	<title>Automatic Delete Product Based On Expiry Date</title>
</head>
<body>
<div class="tab-pane fade in active" id="archieve">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
		<?php
			$con = mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

		mysqli_select_db($con, "aaa");
			$curdate=date("Y/m/d");
		mysqli_query($con, "DELETE FROM prod_list WHERE expiry<='$curdate'");
		mysqli_close($con);
		?>
		<?php
			$con = mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db($con, "aaa");
			$result = mysqli_query($con, "SELECT * FROM prod_list");
			echo "<div align='center'>Note: the data will automatically deleted when it reach the expiry date"."</div><br>";
			echo "
					<tr>
						<th>Product</th>
						<th>Description</th>
						<th>Expiry date</th>
					</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td><div align='center'>" . $row['product'] . "</td>";
			echo "<td><div align='center'>" . $row['description'] . "</td>";
			echo "<td><div align='center'>" . $row['expiry'] . "</td>";
			echo "</tr>";
		}
			echo "</table>";
		mysqli_close($con);
		?> 
		</tbody>
	</table> 
</div>
</body>
</html>