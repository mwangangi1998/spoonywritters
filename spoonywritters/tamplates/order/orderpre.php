<?php
session_start();
require "ordercontroller.php";
$emailError= $levelError=$fmartError = $subjectError= $npageError= $ordertimeError=$textareaError =$totalPriceError=$attachError= "";
$email =$level =$fmart=$subject =$npage=$ordertime=$txtarea =$totalPrice =$attach ="";




if (isset($_POST['submit']))
 {
    # code...

if($_SERVER["REQUEST_METHOD"] =="POST")
{
    if(empty($_POST["email"])){
        $emailError="Enter a valid Email ";
    }else{
        $email = mysqli_real_escape_string($con, $_POST['email']);
    }
    if (empty($_POST["level"])) {
        $levelerror ="level cannot be blank.";
    }else {
        $level =mysqli_real_escape_string($con, $_POST['level']);
    }
    if(empty($_POST["fmart"])){
        $fmartError =" choose a format ";
    }
    else {
        $fmart =mysqli_real_escape_string($con ,$_POST['fmart']);
    }
    if(empty($_POST["subject"])){
        $subjectError ="subject cannot be blank";
    }else {
        $subject =mysqli_real_escape_string($con, $_POST['subject']);
    }
    
    if (empty($_POST["npage"])) {
        $npageError ="choose a valid number of pages";
        # code...
    }
    else{
        $npage =mysqli_real_escape_string($con, $_POST['npage']);
    }
    if (empty($_POST['ordertime'])) {
        $ordertimeError ="Choose  time  of submission";
    }else {
        $ordertime =mysqli_real_escape_string($con, $_POST['ordertime']);
    }
    if (empty($_POST["txtarea"])) {
        $textareaError= "enter topic for your";
        # code...
    }
    else{
        $txtarea =mysqli_real_escape_string($con, $_POST['txtarea']);
    }
    if (empty($_POST["totalPrice"])) {
      $totalPriceError ="please try again";
     
    }
    elseif ($totalPrice ==0 &&  $totalPrice <=0) {
        $totalPriceError ="please try again";
         
    }
    else{
        $totalPrice =mysqli_real_escape_string($con,$_POST['totalPrice']);
    }
 $filename = $_FILES['attach']['name'];

    # Getting File size
$filesize = $_FILES['attach']['size'];

    # Location
$location = "uploads/".$filename;

$extension =pathinfo($filename ,PATHINFO_EXTENSION);
$file =$_FILES['attach']['tmp_name'];
$size =$_FILES['attach']['size'];
if (!in_array($extension,['zip','pdf','png','docs','docx','doc'])) {
    echo "your file extension must be .zip ,.pdf or .png ,.doc";
    # code...
}
elseif(
    $_FILES['attach']['size'] >1000000)
    {
        echo "file is too large";
    }
    else {
        if (move_uploaded_file($file ,$location)) {
            # code...
            $sql ="INSERT INTO ordertable(email,level,fmart,subject,npage,ordertime,txtarea,totalPrice,name,size)
            VALUES
           ('$email','$level','$fmart','$subject','$npage','$ordertime',
           '$txtarea','$totalPrice','$filename','$size')";
            if(mysqli_query($con, $sql)){
               echo  '<script>alert("Order submitted successfully");</script>';
              // header("location:order.php");
           } else{   
                echo  '<script>alert("Order submitted successfully");</script>';


              echo "ERROR: Could not submit the order $sql. " . mysqli_error($con);
           }
           mysqli_close($con);
           exit;
         }
         //if (isset($_POST['submit'])) {
            
                # code...
           // }      
         
         }
        }

    }



    
?>
