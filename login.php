<?php

$host =  "localhost";
$user = "root";
$password = "";
$db = "user";


$data = mysqli_connect($host , $user , $password , $db);
if($data == false){
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from login where username= '" .$username. "'AND password = '".$password."'";
    $result = mysqli_query($data,$sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"]== "Akhilesh"){
        header("location:index.php");
    }
    else{
        echo "incorrect username or password";
    }
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin login</title>
    <link rel="stylesheet" type = "text/css" href="style2.css">
</head>
<body>
   
    
    <form action="" method="post">
        <h1>ADMIN LOGIN</h1>


        <label for="Username">Username</label>
    <input type="text" name="username" id="username"  placeholder="Username" required >
<br>
<br>
        <label for="password">password</label>
    <input type="password"  name="password" placeholder="password" required >
<br>
<br>

<br>
    <button type="submit">Login</button>
    </form>
    <img src="http://login.jpg" alt="">

</body>
</html>