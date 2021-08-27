<?php 
include ('connection.php ');
/*function validate_input($data){
  $data = trim ($data);
  $data =stripslashes($data);
  $data =htmlspecialchars($data);
  return $data;
}
if (isset($_POST['submit'])) {
  # code...

if ($_SERVER["REQUEST_METHOD"]=="POST") { 

$category =validate_input($_POST['category']);
$title =validate_input($_POST['title']);
$Description =validate_input($_POST['Description']);
$price =validate_input($_POST['price']);
  */
  $category =$_POST['category'];
  $title =$_POST['title'];
  $Description =$_POST['Description'];
  $price =$_POST['price'];
    

$sql = "INSERT INTO essaytbl (category ,title,Description,price)
VALUES ('$category' ,'$title','$Description' ,'$price')";

# code...
if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();



 ?>