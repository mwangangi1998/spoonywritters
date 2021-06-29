<?php
require_once "connection.php";
include "orders.php";
if (isset($_GET['file_Id'])) {
    $sql ="SELECT * FROM  ordertable ";
    $result =mysqli_query($con ,$sql);
    $file =mysqli_fetch_assoc($result);
    $filepath ='../tamplates/order/uploads/' .$file['name'];
    if (file_exists($filepath)) {
        header('Content-Type:application/octet-stream');
        header('Content-Description:File Transfer');
        header('Content-Deposition:attachment; filename='.
        basename($filepath) );
        header('Expires:0');
        header('Cache-Control:must-revalidate');
        header('Pragma:public');

        header('Content-Length: '.filesize('uploads/'.$file['name']));
        readfile('../tamplates/order/uploads/' .$file['name']);
        # code...

    }else{
        echo "No file to download";
    }
   
    # code...
}
?>