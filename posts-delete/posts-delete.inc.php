<?php
session_start();
require '../includes/db.inc.php';

$id = $_GET['id'];

$sql="DELETE FROM posts WHERE id=" . $id;
mysqli_query($conn, $sql);

header("Location: ../posts/index.php?delete=success");
$output="Delete Success!";
