<?php
require_once("../../../web/functions/donor_function.php");
include("../../../web/resources/template/header.php");
?>

<div>
    <p>Hi</p>
    <?php
        echo $_SESSION['user_name']."</br>";
        get_message();
        get_donor_list();
    ?>
</div>

<?php include("../../../web/resources/template/footer.php");?>