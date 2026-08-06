<?php

session_start();


if(isset($_POST['login'])){


$username=$_POST['username'];

$password=$_POST['password'];



if($username=="izzadmin" && $password=="123456"){


$_SESSION['admin']=true;


header("Location:index.php");


}else{


echo "Login Failed";


}


}

?>


<!DOCTYPE html>

<html>

<head>

<title>
Admin Login
</title>

<link rel="stylesheet" href="../assets/style.css">

</head>


<body>


<section class="hero">


<div class="card">


<h2>
IZZ IDGAF ADMIN
</h2>



<form method="POST">


<input 
name="username"
placeholder="Username"
>


<br><br>


<input 
name="password"
type="password"
placeholder="Password"
>


<br><br>


<button name="login">

Login

</button>


</form>


</div>


</section>


</body>

</html>
