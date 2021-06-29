<?php
session_start();
include  "ordercontroller.php";
 
$sql = "SELECT * FROM ordertable WHERE email='{$_SESSION['email']}' ";



$result = $con->query($sql);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);


};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my orders</title>
</head>
<style>

</style>
<body>


    <table>
    <table  width="130" cellpadding="15" cellspace="12">
    <tr>
    <td> <strong>Format</strong> </td>
    <td> <strong>Subject</strong></td>
    <td><strong>Number of pages</strong></td>
    <td><strong>Delivery time</strong> </td>
    <td><strong>Topic</strong></td>
    </tr>
    <?php while ($row =mysqli_fetch_array($result)) {?>
       
 
    
    <tr>
    <td><?php echo $row['fmart']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['npage'] ;?></td>
    <td><?php echo $row['ordertime']; ?></td>
    <td><?php  echo $row['txtarea'];?></td>
    </tr>
  <?php  } ?>
  </table>
</body>
</html>