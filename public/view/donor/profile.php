<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

<div class="" style="padding-top: 30px">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">  <h4>Donor Profile</h4> </div>
                <div class="panel-body">

                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img alt="User Pic" src="../../../web/resources/images/user_icon.png" id="profile-image1" class="img-circle img-responsive">
                    </div>

                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                        <?php get_donor_profile()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../../../web/resources/template/footer.php");?>