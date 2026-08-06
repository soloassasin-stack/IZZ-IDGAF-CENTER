<?php

include "includes/db.php";

session_start();


$creator = "IZZ IDGAF";

$follower = $_SESSION['user'] ?? "Guest";


mysqli_query(
$conn,

"INSERT INTO follows(creator,follower)

VALUES('$creator','$follower')"

);


header("Location:profile.php");


?>
