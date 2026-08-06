<?php

include "includes/db.php";

$count = mysqli_query(
$conn,
"SELECT * FROM follows"
);

$total = mysqli_num_rows($count);

?>


<!DOCTYPE html>
<html>

<head>

<title>IZZ IDGAF Profile</title>

<link rel="stylesheet" href="assets/style.css">

</head>


<body>


<header>

<h1>IZZ IDGAF</h1>

<p>Creator Profile</p>

</header>



<nav>

<a href="index.php">Home</a>

<a href="upload.php">Upload</a>

<a href="profile.php">Profile</a>

</nav>



<section class="hero">


<div class="card">


<h2>
🔥 IZZ IDGAF
</h2>


<p>
Official Creator of IZZ IDGAF CENTER
</p>


<p>
🎮 Gaming Creator
<br>
📹 Content Update
<br>
🌐 Community
</p>



<a href="follow.php">

<button>
Follow
</button>

</a>



<h3>

Followers:
<?= $total ?>

</h3>


</div>


</section>



</body>

</html>
