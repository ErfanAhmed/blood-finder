<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

<div class="starter-template">
    <h3>Update personal info</h3>

    <div>

        <?php
        if (isset($_GET['id'])) :

            $id = escape_string($_GET['id']);

            $result = query("SELECT * from donor where login_id = '$id'");
            confirm($result);

            while ($row = fetch_array($result)):

        ?>

        <?php update_donor(); ?>

        <form action="" method="post" role="form">
            <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
            <input type="hidden" name="version" id="version" value="<?php echo $row['version']?>">

            <div class="row">
                <div class="col col-md-2"></div>
                <div class="col col-md-8">
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
                        <input type="text" class="form-control" name="blood_type" id="blood_type" placeholder="blood group"
                               value="<?php echo isset($row['name']) ? $row['name'] : null ?>">
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

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

        <?php
        endwhile;
        endif;
        ?>
    </div>

</div>
<?php include("../../../web/resources/template/footer.php");?>