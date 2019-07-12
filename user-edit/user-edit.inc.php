<?php
require '../includes/db.inc.php';

session_start();

$uid = $_SESSION['userId'];

$email = $_POST['email'];
$dispName = $_POST['dis-name'];
$bio = $_POST['bio'];
$avatar = $_POST['avatar'];


$output = "";
$sql = "";

if(isset($email)){
    $sqlm = "UPDATE users SET email='" . $email . "' WHERE id=" . $uid;
    mysqli_query($conn, $sql);
    header("Location: index.php?update=success");
    exit();
} else if(isset($dispName)){
    $sqld = "UPDATE users SET display_name='" . $dispName . "' WHERE id=" . $uid;
    mysqli_query($conn, $sql);
    header("Location: index.php?update=success");
    exit();
} else if(isset($bio)){
    $sql = "UPDATE users SET bio='" . $bio . "' WHERE id=" . $uid;
    mysqli_query($conn, $sql);
    header("Location: index.php?update=success");
    exit();
} else if(isset($avatar)){
    $sql = "UPDATE users SET avatar='" . $avatar . "' WHERE id=" . $uid;
    mysqli_query($conn, $sql);
    header("Location: index.php?update=success");
    $output="Update Success!";
    exit();
} else {
    header("Location: index.php");
}


?>