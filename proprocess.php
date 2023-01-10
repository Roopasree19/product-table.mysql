<?php
include_once 'prodatabase.php';
if(isset($_POST['save']))
{	 
	 $proname = $_POST['proname'];
	 $price = $_POST['price'];
	 $brand = $_POST['brand'];
	 $qty = $_POST['qty'];
	 $des = $_POST['des'];
	 $sql = "INSERT INTO Product (Productname,Price,Brand,Quality,Description)
	 VALUES ('$proname','$price','$brand','$qty','$des')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>