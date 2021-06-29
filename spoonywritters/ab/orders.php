<?php
$con = mysqli_connect("localhost", "root", "vinny", "userform");
// Check connection
include "../tamplates/order/orderpre.php";
$sql = "SELECT * FROM ordertable ORDER BY Id DESC ";
$result = $con->query($sql);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table{
    width:80%;
    margin:10px;
   
}
table th{ 
    font-weight:30px;
}
table tr  th{
    border: 1px solid blue;
    
}
table td{
    border: 1px solid blue;  
}
</style>
</head>
<body>
<table>
<tr>
<th>OrderId</th>
<th>email</th>
<th>level</th>
<th>format</th>
<th>subject</th>
<th>pages</th>
<th>time</th>
<th>topic </th>
<th>Totalprice</th>
<th>size(in mbs)</th>
<th>Files</th>
<th>Status</th>
</tr>
<?php while($row = $result->fetch_assoc()) {?>
    <tr>
    <td><?php echo $row['Id']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['level']; ?></td>
    <td><?php echo $row['fmart']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['npage']; ?></td>
    <td><?php echo $row['ordertime']; ?></td>
    <td><?php echo $row['txtarea']; ?></td>
    <td><?php echo $row['totalPrice']; ?></td>
    <td><?php echo $row['size']/1000 . "KB"; ?></td>
    <td>
   <a href="../tamplates/order/uploads/<?=$row['name']?>">Download</a> 
    </td>
    </tr>
<?php }?>
</table>

</body>
</html>