<?php
include 'config.inc.php';


$Title = mysqli_real_escape_string($dbc, $_POST['title']);
$Content = mysqli_real_escape_string($dbc, $_POST['bcontent']);
$type = mysqli_real_escape_string($dbc, $_POST['kategori']);


$sql = "INSERT INTO blog_posts (postTitle, postContent, postDate, author, type) VALUES ('$Title', '$Content', '2016-04-07', 1, '$type');";

if (mysqli_query($dbc, $sql)) {
    header("Location: ../Innlegg.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbc);

}
?>
