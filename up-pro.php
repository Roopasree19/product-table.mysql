<?php
include_once 'prodatabase.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE Product set ID='" . $_POST['id'] . "', Productname='" . $_POST['proname'] . "', Price='" . $_POST['price'] . "', Brand='" . $_POST['brand'] . "' ,Quality='" . $_POST['qty'] . "', Description='" . $_POST['des'] . "' WHERE ID='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Product WHERE ID='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="proretri.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="id"  value="<?php echo $row['ID']; ?>">
<br>
Productname: <br>
<input type="text" name="proname" class="txtField" value="<?php echo $row['Productname']; ?>">
<br>
Price :<br>
<input type="text" name="price" class="txtField" value="<?php echo $row['Price']; ?>">
<br>
Brand:<br>
<input type="text" name="brand" class="txtField" value="<?php echo $row['Brand']; ?>">
<br>
Quality:<br>
<input type="text" name="qty" class="txtField" value="<?php echo $row['Quality']; ?>">
<br>
Description:<br>
<input type="text" name="des" class="txtField" value="<?php echo $row['Description']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>


