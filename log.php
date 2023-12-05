<?php
    include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/about.css">
</head>
<body id="l_body" >
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="index.php" onsubmit="return isvalid()" method="POST">
            <label for="">Username:</label>
            <input type="text" class="user" name="user"></input></br></br>
            <label for="">Password:</label>
            <input type="password" class="pass" name="pass"></input></br></br>
            <div>
                <label for=""></label>
                <input type="submit" class="btn" value="Login" name="submit">
            </div>
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length==""&& pass.length==""){
                alert("username and password field is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                    alert("username is empty!!!");
                    return false
                }
                if(pass.length==""){
                    alert("password is empty!!!");
                    return false
                }
            }
        }
    </script>
</body>
</html>