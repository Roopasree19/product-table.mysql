<?php
include_once 'prodatabase.php';
$result = mysqli_query($conn,"SELECT * FROM Product");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Product data</title>
</head>
<body>
<table>
	<tr>
	<td>ID</td>
	<td>Productname</td>
	<td>Price</td>
	<td>Brand</td>
	<td>Quality</td>
	<td>Description</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["ID"]; ?></td>
	<td><?php echo $row["Productname"]; ?></td>
	<td><?php echo $row["Price"]; ?></td>
	<td><?php echo $row["Brand"]; ?></td>
	<td><?php echo $row["Quality"]; ?></td>
	<td><?php echo $row["Description"]; ?></td>
	<td><a href="del-pro.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>