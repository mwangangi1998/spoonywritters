<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #333;
        font-family: 'Poppins', sans-serif;
    } 
    nav {
        color: #fff;
        font-size: 14px!important;
        font-weight: 50px;
        
    }
    .menubar ul {
        list-style:none;
       display: flex;
       color:white;
    }
    .menubar ul li a{
        margin-left:12px;
        color:white;
    }
    .menubar ul li a:hover{
        color:coral;
    }
   
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        color:white;
    }
    span{
        color:blue;
    }
    h2{
        
        position: absolute;
        color:blue;
        top: 30%;
        left: 20%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 20px;
        font-weight: 350;
    }
    p{
        margin-top:10%;
        margin-left:70px;
        font-weight:300;
       
    }
    </style>
</head>
<body>

    <nav class="navbar">
    <h1>Spoony<span>Writters</span></h1>
  <div class="menubar" >
  <ul> 
       <li> <a   href="/spoonywritters/tamplates/order/order.php" target="_blank">ORDER NOW!</a></li>
       <li><a href="/spoonywritters/tamplates/conductus.html">Conduct us</a></li>
        <li><a href="/spoonywritters/tamplates/order/orders.php"> Orders</a></li>
      
   </ul>
  </div>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h2>Welcome <?php echo $fetch_info['name'] ?></h2>
    <p>Order 100% custom writing!</p>
 

    
</body>
</html>