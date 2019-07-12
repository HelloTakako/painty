<div class="container dashboard">
    <div class="row">
        <div class="col-sm-8 card">
        <?php
        include 'user-read.inc.php';
        ?>
        <form action="../user-edit/" method="post">
        <input type="submit" value="Edit">

        </form>
        </div>

        <?php include '../partials/sub-column.php'; ?>

    </div>


</div>