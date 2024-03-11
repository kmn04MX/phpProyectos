<?php
use Vidamrr\Notas\models\Note;
if(count($_POST) > 0){
    
    $title= isset($_POST['title']) ?? '';
    $content= isset($_POST['content']) ?? '';
    $note = new Note($title, $content);
    $note->save();
}else{
    $echo = "<P>Nota no creada</P>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new note</title>
</head>
<body>
    <h1>Create new note</h1>
    <form action="?view=create" method="POST">
        <input type="text" name = "title" placeholder="Title . . .">
        <textarea name="content" placeholder="Content . . ." id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Create note">
    </form>
</body>
</html>