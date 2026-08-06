<?php

include "includes/db.php";


session_start();


if(isset($_POST['login'])){


$email=$_POST['email'];
$password=$_POST['password'];


$result=mysqli_query($conn,

"SELECT * FROM users WHERE email='$email'");


$user=mysqli_fetch_assoc($result);



if($user && password_verify($password,$user['password'])){


$_SESSION['user']=$user['username'];


echo "Login Success";


}else{


echo "Wrong Login";


}


}

?>


<form method="POST">


<input name="email" placeholder="Email">


<input name="password" type="password" placeholder="Password">


<button name="login">
Login
</button>


</form>
