<?php

session_start();


if(!isset($_SESSION['admin'])){

header("Location:login.php");

exit();

}

?>

include "../includes/db.php";


$result = mysqli_query(
$conn,
"SELECT * FROM posts ORDER BY id DESC"
);

?>


<!DOCTYPE html>

<html>

<head>

<title>
IZZ IDGAF ADMIN
</title>

<link rel="stylesheet" href="../assets/style.css">

</head>


<body>


<header>

<h1>
IZZ IDGAF ADMIN PANEL
</h1>

</header>



<section class="post">


<h2>
Manage Posts
</h2>



<?php while($row=mysqli_fetch_assoc($result)){ ?>


<div class="card">


<h3>
<?= $row['title']; ?>
</h3>


<p>
<?= $row['description']; ?>
</p>


<img 
src="../uploads/<?= $row['image']; ?>"
width="200"
>


<br><br>


<a href="delete.php?id=<?= $row['id']; ?>">

<button>
Delete
</button>

</a>



</div>


<br>


<?php } ?>


</section>


</body>

</html>
