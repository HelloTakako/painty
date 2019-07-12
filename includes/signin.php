<?php

if(isset($_POST['signin-submit'])){
    require 'db.inc.php';

    $userEmail = $_POST['email'];
    $userPwd = $_POST['password'];

    $sql = "SELECT * 
            FROM users
            WHERE email='" . $userEmail . "'
            AND user_password='" . $userPwd . "'
            ";
        
    $result = mysqli_query($conn, $sql);
    

    if ($result->num_rows == 1) // sign in success
    {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userId'] = $row['id'];
        $_SESSION['userName'] = $row['display_name'];

        header("Location: ../dashboard/");
        exit();
    }
    else // sign in failed
    {
        header("Location: ../index.php?signin=failed");
        exit();
    }
    $conn->close();
}
else // in case users directly go to the url
{
    header("Location: ../index.php?signin=noreference");
    exit();
}

?>