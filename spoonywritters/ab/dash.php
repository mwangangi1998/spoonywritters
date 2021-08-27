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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--boxicons cdm link-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="masterstyle/style2.css">
    <title>|Home</title>
</head>
<body>
<div class="sidebar">
  <div class="logo_content">
    <div class="logo">
      <i class="bx bx1-c-plus-plus"></i>
      <div class="logo_name">spoony<span id="logo">writters</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="new_list">
    <li>
        <a href="#">
          <i class=""></i>
          <input type="text" name="" id="search" placeholder="search">
          </a>
      </li>
      <li>
        <a href="dash.php"> 
         <i class='bx bxs-home bx-flip-horizontal' ></i>
          <span class="my_links">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="orders.php">
        <i class='bx bx-cart bx-flip-horizontal' ></i>
          <span class="my_links">orders</span>
        </a>
      </li>
      <li>
        <a href="essay_for_sale/resources.php">
        <i class='bx bx-upload'></i>
          <span class="my_links"> Essay for sale</span>
        </a>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-chat bx-flip-horizontal' ></i>
          <span class="my_links">messages</span>
        </a>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-folder bx-flip-horizontal' ></i>
          <span class="my_links"> file manager</span>
        </a>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-user bx-flip-horizontal' ></i>
          <span class="my_links"> Add user</span>
        </a>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-lock-open-alt bx-flip-horizontal'></i>
          <span class="my_links">change password</span>
        </a>
      </li>
      
    <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="my_links">setting</span>
        </a>
      </li>
    
      <li>
        <a href="logout.php">
        <i class='bx bx-log-out'></i>
          <span class="my_links">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<script>
  let btn =document.querySelector("#btn");
  let sidebar =document.querySelector(".sidebar");
  let searchBtn =document.querySelector("#search");

btn.onclick =function(){
  sidebar.classList.toggle("active") 
}

searchBtn.onclick =function(){
  sidebar.classList.toggle("active") 
}

</script>
</body>
</html>