<?php
$id = $_GET['id'];
?>

<div class="container dashboard">
    <h2>Create New Post</h2>
    <div class="row">
        <!-- first column -->
        <div class="col-sm-8">
            <!-- create new post -->
            <div class="card">
            <div class="card-body">
            <?php
                require '../includes/db.inc.php';

                $title = $_POST['title'];
                $message = $_POST['message'];
                $id = $_GET['id'];

                echo "<p>Do you really want to delete this post?</p>";

                $sql="SELECT *
                    FROM posts
                    WHERE id='"
                    . $id .
                    "'";
                $result = mysqli_query($conn, $sql);
                $row = $result-> fetch_assoc();
                echo "
                     <p>Title:<br />"
                    . $row['title']
                    . "<br />Message:<br />"
                    . $row['post_message']
                    ."</p>
                ";
            ?>
            <form class="form-group" action="posts-delete.inc.php?id=<?php echo $id; ?>" method="post">
                <input type="submit" name="post-delete" value="Delete" class="btn btn-danger btn-md btn-block">
            </form>
            </div>
            </div>

        </div>

        <!-- second column -->
        <?php include '../partials/sub-column.php'; ?>
    </div>


</div>