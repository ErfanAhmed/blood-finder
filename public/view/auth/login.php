<?php
require_once("../../../web/functions/auth_fuction.php");
include("../../../web/resources/template/header.php");
?>

    <div class="starter-template">
        <h3>Log in</h3>
        <h4><?php get_message()?></h4>

        <?php login() ?>

        <form action="" method="post" role="form">

            <div class="form-group input-group">
                <span class="input-group-addon" for="">login id</span>
                <input type="text" class="form-control" name="login_id" id="login_id" placeholder="login id....">
            </div>

            <div class="form-group input-group">
                <span class="input-group-addon" for="">Password</span>
                <input type="password" class="form-control" name="password" id="password" placeholder="password....">
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Log in</button>
            </div>
        </form>

    </div>

<?php include("../../../web/resources/template/footer.php");?>