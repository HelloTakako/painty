<div class="container dashboard">
    <div class="row">
        <div class="col-sm-8 card">
        <?php
        session_start();
        include '../user-read/user-read.inc.php';
        ?>
        <?php echo $output; ?>
        <form action="user-edit.inc.php" method="post">
        <label>Email :</label>
        <input type="email" name="email"><br />
        <label>Display Name :</label>
        <input type="text" name="dis-name"><br />
        <label>Bio :</label>
        <input type="text" name="bio"><br />
        <label>Avatar :</label>
        <input type="text" name="avatar"><br />

        <input type="submit" value="Update" name='update'>
        <input type="submit" value="Cancel" name='cancel'>

        </form>
        </div>

        <?php include '../partials/sub-column.php'; ?>

    </div>


</div>