<?php

$con = mysqli_connect("localhost","root","Dayal019")

or die(mysqli_connect_error());
    
if($con){
        echo"Conenction Successful";
    }else{
        echo "No connection";
    }



mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert info userinfodata (user, email, mobile, comments) 
values ('$user', '$email', '$mobile', '$comments')";

echo "$query";

mysqli_query($con, $query);


header("loacation:index.php");


?>