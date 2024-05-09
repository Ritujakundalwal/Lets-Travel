<?php

$connection = mysqli_connect('localhost','root','','callus');

if(isset($_POST['button'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $message =$_POST['message'];

$request="insert into contacts(name	,email,	message	)values('$name','$email','$message')";

if(mysqli_query($connection,$request)){
    header('location:contact.php');
}
else{
   echo $error=mysqli_error($connection);
    echo'something went wrong try again';
}




}
else{
   echo $error=mysqli_error($connection);
    echo'something went wrong try again';
}



?>