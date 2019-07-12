<?php
session_start();
require '../includes/db.inc.php';

$title = $_POST['title'];
$message = $_POST['message'];
$id = $_GET['id'];

$sql = "UPDATE posts SET title='" . $title . "', post_message='" . $message . "' WHERE id=" . $id;
    mysqli_query($conn, $sql);
    header("Location: ../posts/index.php?update=success");
    $output="Update Success!";
