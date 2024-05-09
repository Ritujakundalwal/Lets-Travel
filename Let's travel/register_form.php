<?php

$connection = mysqli_connect('localhost','root','','callus');

if(isset($_POST['button'])){
    $myname1 =$_POST['myname1'];
    $myemail =$_POST['myemail'];
    $myphone =$_POST['myphone'];
    $myage =$_POST['myage'];
    $mygender =$_POST['mygender'];
    $departuredate =$_POST['departuredate'];
    $returndate =$_POST['returndate'];
    $td =$_POST['td'];
    $locations=$_POST['locations'];

    


$request="insert into register(myname1,myemail,myphone,myage,mygender,departuredate,returndate,td,locations)
values('$myname1','$myemail','$myphone','$myage','$mygender','$departuredate','$returndate','$td','$locations')";

if(mysqli_query($connection,$request)){
    header('location:register.php');
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