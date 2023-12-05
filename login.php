<?php
    include("connection.php");
    if (isset($_post["submit"])){
        $Username= $_post["user"];
        $Password= $_post["pass"];

        $sql="select * from login where Username ='$Username' and Password='$Password' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            header("location:welcome.php");
        }
        else{
            echo '<script>
                window.location.href="log.php";
                alert("Login failed.Invalid username or password!!!")
            </script>';
            }
    }


?>