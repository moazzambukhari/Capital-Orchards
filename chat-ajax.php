<?php
include "config.php";
if($_POST['status'] == 'status'){
   $message = $_POST['message'];
//    echo $message; 
   $insert="INSERT INTO `message`(`me`) VALUES ('$message')" ;
    $ressult=mysqli_query($con,$insert);
    if($ressult){
        echo "";
    }   
}
?>