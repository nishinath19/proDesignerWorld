<!-- <?php

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


?> -->

<?php
	$user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];


	// Database connection
	$conn = new mysqli('localhost','root','Dayal019','youtubeuserdata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(user, email, mobile, comments) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $user, $email, $mobile, $comments);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

    echo "$query";
?>