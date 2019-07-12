<?php

if(isset($_POST['signup-submit'])){
    require 'db.inc.php';

    $userEmail = $_POST['email'];
    $userPwd = $_POST['password'];

    $sql = "SELECT * 
            FROM users
            WHERE email='" . $userEmail . "'";
            
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows == 0) // sign up success
    {
        session_start();
        
        $sqlIns = "INSERT INTO users (email, user_password, display_name)
        VALUES ('" . $userEmail . "','". $userPwd."','Unknown');";
        mysqli_query($conn, $sqlIns);

        $sql = "SELECT * 
            FROM users
            WHERE email='" . $userEmail . "'";
            
        $result2 = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_assoc($result2);

        $_SESSION['userId'] = $row2['id'];
        $_SESSION['userName'] = $row2['display_name'];

        header("Location: ../dashboard/index.php?uid=". $row2['id']);
        exit();
    }
    else // sign up failed
    {
        header("Location: ../index.php?signup=failed");
        exit();
    }
    $conn->close();
}
else // in case users directly go to the url
{
    header("Location: ../index.php?signup=noreference");
    exit();
}

?>