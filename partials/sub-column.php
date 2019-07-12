<div class="col-sm-4">
<div class="card p-3">
<h4>Members</h4>
<?php
require '../includes/db.inc.php';

$sql="SELECT * FROM users";

$result = mysqli_query($conn, $sql);

foreach($result as $row){
echo $row['display_name'] . "<br/>";
}
?>
</div>
</div>