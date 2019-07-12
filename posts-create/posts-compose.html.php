<div class="container dashboard">
    <h2>Create New Post</h2>
    <div class="row">
        <!-- first column -->
        <div class="col-sm-8">
            <!-- create new post -->
            <div class="card">
            <div class="card-body">
            <form class="form-group" action="posts-compose.inc.php" method="post">
                <label>Title:</label>
                <input type="text" name="title" required>
                <br>
                <label>Message:</label>
                <textarea class="form-control" rows="3" name="message"></textarea required>
                <br/>

                <input type="submit" name="compose-create" value="Create" class="btn btn-primary btn-md btn-block">
                <input type="submit" name="compose-cancel" value="Cancel" class="btn btn-primary btn-md btn-block">
            </form>
            </div>
            </div>

        </div>

        <!-- second column -->
        <?php include '../partials/sub-column.php'; ?>
    </div>


</div>