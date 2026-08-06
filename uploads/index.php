<?php

include "includes/db.php";


$result=mysqli_query(
$conn,
"SELECT * FROM posts ORDER BY id DESC"
);


?>


<h1>IZZ IDGAF CENTER</h1>


<?php while($row=mysqli_fetch_assoc($result)){ ?>


<div class="card"><a href="like.php?id=<?= $row['id']; ?>">
❤️ Like
</a>


<h2>
<?= $row['title']; ?>
</h2>


<p>
<?= $row['description']; ?>
</p>


<img 
src="uploads/<?= $row['image']; ?>"
width="300"
>


</div>


<?php } ?>

<form action="comment.php" method="POST">

<input 
type="hidden"
name="post_id"
value="<?= $row['id']; ?>"
>


<input 
name="comment"
placeholder="Write comment..."
>


<button>
Comment
</button>


</form>
