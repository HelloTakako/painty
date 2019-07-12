<div class="dashboard container">
    <div class="row">
        <!-- first column -->
        <div class="col-sm-8 card pt-3">
            <!-- create new post -->
            <form action="../posts-create/" method="post" class='p-3'>
            <input type="submit" name="compose-submit" value="Create New Post" class="btn btn-primary btn-lg btn-block">
            </form>
            <!-- list of posts -->
        <?php
            include 'posts-main.inc.php';
        ?>    

        </div>

        <!-- second column -->
        <?php include '../partials/sub-column.php'; ?>
    </div>


</div>