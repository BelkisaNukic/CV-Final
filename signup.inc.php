<?php

include_once 'dbh.inc.php';

$first=$_POST['first'];
$last=$_POST['last'];
$comment= $_POST['comment'];

$sql="INSERT INTO osoba (user_first, user_last, user_comment) VALUES ('$first', '$last', '$comment' );";
mysqli_query($conn, $sql);

header("Location:../index.php?signup=success");

?>