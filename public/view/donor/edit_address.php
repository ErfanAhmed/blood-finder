<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

<div class="starter-template">
    <h3>Update donor address</h3>

    <div>

        <?php
        if (isset($_GET['id'])) :

            $id = escape_string($_GET['id']);

            $result = query("SELECT * from address a 
                                  JOIN donor d 
                                  ON d.address_id = a.id
                                  where login_id = '$id'");
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
