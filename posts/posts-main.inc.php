<?php
require '../includes/db.inc.php';

$sql="SELECT id, title, post_message, users_id
      FROM posts
      WHERE users_id='"
      . $_SESSION['userId'] .
      "'";

$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo
        "<div class='card-body'>     
        <h3>" 
        . $row['title']
        . "</h3><div class='card-text mb-3'>"
        . $row['post_message']
        . "</div>
        <form class='float-left' action='../posts-edit/index.php?id=". $row['id'] ."' method='post'>
            <input type='submit' name='edit' class='btn btn-secondary' value='Edit'>
        </form>
        <form class='float-left ml-2' action='../posts-delete/index.php?id=". $row['id'] ."' method='post'>
            <input type='submit' name='delete"
        . $row['id']
        . "' class='btn btn-danger' value='Delete'>
        </form>  
        </div>";
    }
}
