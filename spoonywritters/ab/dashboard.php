
<?
session_start(); // start session
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
  die();
}
?>

<?php require_once 'validate.php';?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Home</title>
</head>
<style>
   
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  padding: 20px 10px;
  background-color: blueviolet;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}


.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  margin:50px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
<body>


<div class="header">
    <div class="header-right">
    <a class="active" href="dashboard.php">Home</a>
    <a href="orders.php">  orders  </a>
    <a href="">messages</a>
    <a href="changepassword.php">change password</a>
    <button type="button" class="btn btn-light"><a href="logout.php">Logout</a></button>
  </div>
</div>

  
</body>
</html>
