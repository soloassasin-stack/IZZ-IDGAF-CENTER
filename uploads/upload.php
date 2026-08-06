<?php

include "includes/db.php";

session_start();


if(isset($_POST['upload'])){


$title = $_POST['title'];
$description = $_POST['description'];

$file = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];


move_uploaded_file(
$tmp,
"uploads/".$file
);


$user = $_SESSION['user'] ?? "Guest";


$sql = "INSERT INTO posts
(title,description,image)
VALUES
('$title','$description','$file')";


mysqli_query($conn,$sql);


echo "Post uploaded!";

}

?>


<form method="POST" enctype="multipart/form-data">


<h2>IZZ IDGAF Upload</h2>


<input 
name="title" 
placeholder="Post title"
>


<br><br>


<textarea 
name="description"
placeholder="Description">
</textarea>


<br><br>


<input 
type="file"
name="file"
>


<br><br>


<button name="upload">
Upload
</button>


</form>
