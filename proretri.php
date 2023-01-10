<?php
include_once 'prodatabase.php';
$result = mysqli_query($conn,"SELECT * FROM Product");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>ID</td>
    <td>Productname</td>
    <td>Price</td>
    <td>Brand</td>
    <td>Quality id</td>
    <td>Description id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["Productname"]; ?></td>
    <td><?php echo $row["Price"]; ?></td>
    <td><?php echo $row["Brand"]; ?></td>
    <td><?php echo $row["Quality"]; ?></td>
    <td><?php echo $row["Description"]; ?></td>
    <td><a href="up-pro.php?id=<?php echo $row["ID"]; ?>">Update</a></td>
    <td><a href="del-pro.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>