<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

    <div class="starter-template">
        <h3>Search Result for <?php get_message()?></h3>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Blood Group</th>
                <th>Phone No</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                <?php search_donor() ?>
            </tbody>
        </table>
    </div>

<?php include("../../../web/resources/template/footer.php");?>