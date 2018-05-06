<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

<div class="starter-template">
    <?php
        register_donor();
    ?>

    <form action="" method="post" role="form">

        <div class="row">
            <div class="col col-md-2"></div>

            <div class="col col-md-8">
                <legend>User Credential</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="login_id" id="login_id" placeholder="login id...">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password...">
                </div>

                <legend>Personal Info</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name.."
                           value="<?php echo isset($row['name']) ? $row['name'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <select class="form-control" name="blood_type" id="blood_type">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="phone number..."
                           value="<?php echo isset($row['phone_no']) ? $row['phone_no'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email..."
                           value="<?php echo isset($row['email']) ? $row['email'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="nid_no" id="nid_no" placeholder="nid no..."
                           value="<?php echo isset($row['nid_no']) ? $row['nid_no'] : null ?>">
                </div>

                <legend>Address Detail</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="police_station" id="police_station" placeholder="police station..."
                           value="<?php echo isset($row['police_station']) ? $row['police_station'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="post_office" id="post_office" placeholder="post office..."
                           value="<?php echo isset($row['post_office']) ? $row['post_office'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="post_code" id="post_code" placeholder="post code..."
                           value="<?php echo isset($row['post_code']) ? $row['post_code'] : null ?>">
                </div>


                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="city..."
                           value="<?php echo isset($row['city']) ? $row['city'] : null ?>">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="division" id="division" placeholder="division..."
                           value="<?php echo isset($row['division']) ? $row['division'] : null ?>">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>
            </div>

            <div class="col col-md-2"></div>
        </div>
    </form>
</div>

<?php include("../../../web/resources/template/footer.php");?>