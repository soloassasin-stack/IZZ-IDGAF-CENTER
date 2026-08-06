<?php

include "includes/db.php";


$post_id = $_GET['id'];


mysqli_query(
$conn,
"INSERT INTO likes(post_id)
VALUES('$post_id')"
);


header("Location:index.php");

?>
