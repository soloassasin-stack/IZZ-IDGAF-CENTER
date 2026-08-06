<?php

include "includes/db.php";


if(isset($_POST['comment'])){


$post=$_POST['post_id'];

$text=$_POST['comment'];


mysqli_query(
$conn,

"INSERT INTO comments(post_id,comment)

VALUES('$post','$text')"

);


}


header("Location:index.php");


?>
