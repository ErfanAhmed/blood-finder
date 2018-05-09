<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/2/18
 * Time: 11:14 PM
 */
require_once("function.php");

/**
 * Unset donor name and id from session
 */
if (isset($_SESSION['user_name']) || isset($_SESSION['user_id'])) {
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    set_message("You have successfully loged out");
    redirect("../../public/view/auth/login.php");
} else {
    redirect("../../public/view/auth/login.php");
}
?>
