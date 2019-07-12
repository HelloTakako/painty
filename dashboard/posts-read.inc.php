<?php
require '../includes/db.inc.php';

$sql="SELECT id, title, post_message, users_id FROM posts";

$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo
        "<div class='card-body'><h3>" 
        . $row['title']
        . "</h3><div class='card-text'>"
        . $row['post_message']
        . "</div></div>";
    }
}
