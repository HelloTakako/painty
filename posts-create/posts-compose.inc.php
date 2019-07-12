<?php
session_start();
require '../includes/db.inc.php';

$title = $_POST['title'];
$message = $_POST['message'];

$sql = "INSERT INTO posts (title, post_message, users_id)
VALUES ('" . $title . "','". $message."','". $_SESSION['userId'] ."');";

mysqli_query($conn, $sql);

echo $sql;

header("Location: ../posts/");
exit();

