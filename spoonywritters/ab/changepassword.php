<?php
echo password_hash('vinny',PASSWORD_DEFAULT);

?>

<?php require_once "connection.php"?>
<?php 
/*
SESSION_start();
include  "ordercontroller.php";
 
//$sql = "SELECT * FROM support WHERE email='{$_SESSION['email']}' ";
     
     if (isset($_POST['changepass']))
         {
         $cpassword = $_POST['cpassword'];
         $password= $_POST['password'];
         $re_pass=$_POST['re_pass']
         $password_query = mysqli_query("SELECT * FROM support WHERE email='email' ");
         $password_row = mysqli_fetch_array($password_query);
         $database_password = $password_row['password'];
         if ($database_password == $cpassword)
             {
             if ($new_pass == $re_pass)
                 { $password= $_POST['password'];
        
                 $update_pwd = mysqli_query("update users set password='$new_pass' where id='1'");
                 echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
                 }
               else
                 {
                 echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
                 }
             }
           else
             {
             echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
             }
         }
      
     ?>*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
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
old -password:<input type="password" placeholder="Enter  your previous password " name="cpassword"required>
</div>
<div class="control">
New -password   <input type="password" name="password"  placeholder="enter new password" required> 
</div>
<div class="control">
Re-type New -password   <input type="password" name="re_pass"  placeholder="enter new password" required> 
</div>

<div class="control">
    <input type="button" value="change -password" name="changepas">
</div>

    </form>
</body>
</html>