<?php
$name = $_POST['name'];
$comment = $_POST['comment'];

if ($_POST)
    {
    $handle = fopen("comments.txt", "a");
    fwrite($handle, $name . ":<br/>" . $comment . "<br/>");
    fclose($handle);
    }

?>

<form method="post">
Name:<input type="text" name="name"><br/>
Comment:<textarea name="comment"></textarea><br/>
<input type="submit" name="submit" value="Post">
</form>

<?php include "comments.txt"; ?>