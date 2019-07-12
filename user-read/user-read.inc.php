<?php
require '../includes/db.inc.php';

$sql="SELECT * FROM users WHERE id='" . $_SESSION['userId'] . "'";

$result = mysqli_query($conn, $sql);

$row = $result-> fetch_assoc();
echo "
    <div class='alert alert-warning mt-3'><p>Your user ID: "
    . $row['id']
    . "<br />Email: "
    . $row['email']
    . "<br />Display Name: "
    . $row['display_name']
    . "<br />Bio: "
    . $row['bio']
    . "<br />Avatar: "
    . $row['avatar']
    . "</p></div>"
    ;

?>