<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

    <div class="starter-template">
        <h3>Donor List</h3>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Speed</th>
                <th>Price</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php get_donor_list() ?>
            </tbody>
        </table>
    </div>

<?php include("../../../web/resources/template/footer.php");?>