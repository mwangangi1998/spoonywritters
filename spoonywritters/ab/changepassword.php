<?php require_once "connection.php"?>
<?php

$email = "";
$password ="";
$cpassword ="";
//$errors = array();

if (isset($_POST['changepas'])) {
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        echo "<script>alert('Your new and Retype Password is not match'); window.location='dashboard.php'</script>";
      # code...
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color:darkgreen;
}
h1{
    text-align:center;

}
.control{
    text-align:center;
    color:white;
    font-weight:23px;
    padding: 12px;
    margin-left:23px auto;
}

</style>
<body>
    <h1>Change password</h1>
    <form action="" method="POST" autocomplete="off"> 

<div class="control">
Email:<input type="email" placeholder="Enter email" required>
</div>

<div class="control">
New -password   <input type="password" name="password"  placeholder="enter new password" required> 
</div>
<div class="control">  
old -password:<input type="password" placeholder="confirm your password " name="cpassword"required>
</div>
<div class="control">
    <input type="button" value="change -password" name="changepas">
</div>

    </form>
</body>
</html>